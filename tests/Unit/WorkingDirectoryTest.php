<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Git\Container\GitDefinition;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;
use Ghostwriter\Git\WorkingDirectory;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

use function is_a;

#[CoversClass(Git::class)]
#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(GitDefinition::class)]
#[CoversClass(WorkingDirectory::class)]
final class WorkingDirectoryTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(WorkingDirectory::class, WorkingDirectoryInterface::class, true));
    }

    /** @throws Throwable */
    public function testToString(): void
    {
        self::assertSame($this->workspace, WorkingDirectory::new($this->workspace)->toString());
    }
}
