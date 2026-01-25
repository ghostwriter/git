<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Container\Container;
use Ghostwriter\Filesystem\Interface\FilesystemInterface;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\GitInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use Ghostwriter\Shell\Interface\ShellInterface;
use Override;
use PHPUnit\Framework\TestCase;
use Throwable;

use const DIRECTORY_SEPARATOR;

use function implode;
use function spl_object_hash;
use function sprintf;
use function sys_get_temp_dir;

abstract class AbstractTestCase extends TestCase
{
    protected FilesystemInterface $filesystem;

    protected GitInterface $git;

    protected ShellInterface $shell;

    protected string $workspace;

    /** @throws Throwable */
    #[Override]
    final protected function setUp(): void
    {
        $this->workspace = implode(
            DIRECTORY_SEPARATOR,
            [sys_get_temp_dir(), 'ghostwriter', 'git', spl_object_hash($this)]
        );

        $container = Container::getInstance();

        $this->filesystem = $container->get(FilesystemInterface::class);
        $this->shell = $container->get(ShellInterface::class);

        $this->freshWorkspace();

        parent::setUp();
    }

    /** @throws Throwable */
    #[Override]
    final protected function tearDown(): void
    {
        $this->deleteWorkspace();

        parent::tearDown();
    }

    /** @throws Throwable */
    final public function deleteWorkspace(): void
    {
        if (! $this->filesystem->exists($this->workspace)) {
            return;
        }

        $this->shell->execute('rm', ['-fr', $this->workspace], sys_get_temp_dir());
    }

    /** @throws Throwable */
    final public function freshWorkspace(): void
    {
        $this->deleteWorkspace();

        $workspace = $this->workspace;

        $this->filesystem->createDirectory($workspace);
        $this->filesystem->chdir($workspace);

        self::assertShellResultSuccess($this->shell->execute('git', ['init'], $workspace));

        $this->git = Git::new($this->workspace, [
            'GHOSTWRITER_GIT' => '1',
        ]);
    }

    final public static function assertShellResultFailure(ResultInterface $result): void
    {
        self::assertNotSame(0, $result->exitCode(), sprintf('The exit code is %d.', 0));
    }

    final public static function assertShellResultSuccess(ResultInterface $result): void
    {
        self::assertSame(0, $result->exitCode(), sprintf('The exit code is not %d.', 0));
    }
}
