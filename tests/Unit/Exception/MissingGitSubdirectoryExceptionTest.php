<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Ghostwriter\Git\Container\GitDefinition;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Exception\MissingGitSubdirectoryException;
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
#[CoversClass(MissingGitSubdirectoryException::class)]
final class MissingGitSubdirectoryExceptionTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testImplementsExceptionInterface(): void
    {
        self::assertTrue(is_a(MissingGitSubdirectoryException::class, GitExceptionInterface::class, true));

        self::assertTrue(is_a(MissingGitSubdirectoryException::class, Throwable::class, true));
    }

    public function testWorkingDirectory(): void
    {
        $this->expectException(MissingGitSubdirectoryException::class);

        $invalidWorkingDirectory = $this->workspace . '/non-existent-directory';

        WorkingDirectory::new($invalidWorkingDirectory);
    }
}
