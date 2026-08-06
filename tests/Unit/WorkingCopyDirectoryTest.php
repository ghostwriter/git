<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Git\Container\GitProvider;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Exception\MissingDirectoryException;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;
use Ghostwriter\Git\WorkingCopyDirectory;
use Ghostwriter\Git\WorkingDirectory;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(Git::class)]
#[CoversClass(GitProvider::class)]
#[CoversClass(MissingDirectoryException::class)]
#[CoversClass(WorkingCopyDirectory::class)]
#[CoversClass(WorkingDirectory::class)]
final class WorkingCopyDirectoryTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testImplementsGhostwriterGitInterfaceWorkingDirectoryInterface(): void
    {
        self::assertClassImplementsInterface(WorkingCopyDirectory::class, WorkingDirectoryInterface::class);
    }
}
