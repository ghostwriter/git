<?php

declare(strict_types=1);

namespace Tests\Unit\Container\Ghostwriter\Git;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Filesystem\Interface\FilesystemInterface;
use Ghostwriter\Git\Container\Ghostwriter\Git\GitFactory;
use Ghostwriter\Git\Container\GitProvider;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\GitInterface;
use Ghostwriter\Git\WorkingDirectory;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

use function is_a;

#[CoversClass(Git::class)]
#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(WorkingDirectory::class)]
#[CoversClass(GitProvider::class)]
#[CoversClass(GitFactory::class)]
final class GitFactoryTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testGitFactory(): void
    {
        $filesystem = $this->createMock(FilesystemInterface::class);

        $filesystem->expects(self::once())
            ->method('currentWorkingDirectory')
            ->willReturn($this->workspace)
            ->seal();

        $container = $this->createMock(ContainerInterface::class);

        $container->expects(self::once())
            ->method('get')
            ->with(FilesystemInterface::class)
            ->willReturn($filesystem)
            ->seal();

        $git = (new GitFactory())($container);

        self::assertInstanceOf(GitInterface::class, $git);

        self::assertInstanceOf(Git::class, $git);
    }

    public function testImplementsFactoryInterface(): void
    {
        self::assertTrue(is_a(GitFactory::class, FactoryInterface::class, true));
    }
}
