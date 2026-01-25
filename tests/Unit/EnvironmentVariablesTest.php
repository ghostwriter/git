<?php

declare(strict_types=1);

namespace Tests\Unit;

use Ghostwriter\Git\Container\GitDefinition;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\EnvironmentVariablesInterface;
use Ghostwriter\Git\WorkingDirectory;
use PHPUnit\Framework\Attributes\CoversClass;
use Throwable;

use function is_a;

#[CoversClass(Git::class)]
#[CoversClass(WorkingDirectory::class)]
#[CoversClass(GitDefinition::class)]
#[CoversClass(EnvironmentVariables::class)]
final class EnvironmentVariablesTest extends AbstractTestCase
{
    public function testEnvironmentVariablesToArray(): void
    {
        $environmentVariables = new EnvironmentVariables([
            'GIT_AUTHOR_NAME' => 'Black Lives Matter',
        ]);

        self::assertSame([
            'GIT_AUTHOR_NAME' => 'Black Lives Matter',
        ], $environmentVariables->toArray());
    }

    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(EnvironmentVariables::class, EnvironmentVariablesInterface::class, true));
    }
}
