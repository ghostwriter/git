<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Git\Container\GitDefinition;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\GitInterface;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;
use Ghostwriter\Git\WorkingDirectory;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

use function getenv;
use function is_a;

#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(Git::class)]
#[CoversClass(GitDefinition::class)]
#[CoversClass(WorkingDirectory::class)]
final class GitTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testGetEnvironmentVariables(): void
    {
        $environmentVariables = $this->git->environmentVariables();
        self::assertInstanceOf(EnvironmentVariables::class, $environmentVariables);

        self::assertSame([
            ...getenv(),
            'GHOSTWRITER_GIT' => '1',
        ], $environmentVariables->toArray());
    }

    /** @throws Throwable */
    public function testGetWorkingDirectory(): void
    {
        $workingDirectory = $this->git->workingDirectory();
        self::assertInstanceOf(WorkingDirectoryInterface::class, $workingDirectory);

        self::assertStringContainsString($this->workspace, $workingDirectory->toString());
    }

    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(Git::class, GitInterface::class, true));
    }
}
