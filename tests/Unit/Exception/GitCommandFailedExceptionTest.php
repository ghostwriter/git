<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Ghostwriter\Git\Container\GitDefinition;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Exception\GitCommandFailedException;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Git\WorkingDirectory;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;

use Throwable;

use function is_a;

#[CoversClass(Git::class)]
#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(WorkingDirectory::class)]
#[CoversClass(GitDefinition::class)]
#[CoversClass(GitCommandFailedException::class)]
final class GitCommandFailedExceptionTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testImplementsExceptionInterface(): void
    {
        self::assertTrue(is_a(GitCommandFailedException::class, GitExceptionInterface::class, true));

        self::assertTrue(is_a(GitCommandFailedException::class, Throwable::class, true));
    }
}
