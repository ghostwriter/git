<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Exception;
use Ghostwriter\Git\Container\GitProvider;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Exception\MissingDirectoryException;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Git\WorkingDirectory;
use Ghostwriter\PHPUnitAssertions\Trait\AssertionsTrait;
use InvalidArgumentException;
use LogicException;
use PHPUnit\Framework\Attributes\CoversClass;
use Stringable;
use Tests\Unit\AbstractTestCase;
use Throwable;

#[CoversClass(EnvironmentVariables::class)]
#[CoversClass(Git::class)]
#[CoversClass(GitProvider::class)]
#[CoversClass(MissingDirectoryException::class)]
#[CoversClass(WorkingDirectory::class)]
final class MissingDirectoryExceptionTest extends AbstractTestCase
{
    use AssertionsTrait;

    /** @throws Throwable */
    public function testExtendsException(): void
    {
        self::assertClassExtendsClass(MissingDirectoryException::class, Exception::class);
    }

    /** @throws Throwable */
    public function testExtendsInvalidArgumentException(): void
    {
        self::assertClassExtendsClass(MissingDirectoryException::class, InvalidArgumentException::class);
    }

    /** @throws Throwable */
    public function testExtendsLogicException(): void
    {
        self::assertClassExtendsClass(MissingDirectoryException::class, LogicException::class);
    }

    /** @throws Throwable */
    public function testImplementsGhostwriterGitInterfaceExceptionIGitExceptionInterface(): void
    {
        self::assertClassImplementsInterface(MissingDirectoryException::class, GitExceptionInterface::class);
    }

    /** @throws Throwable */
    public function testImplementsStringable(): void
    {
        self::assertClassImplementsInterface(MissingDirectoryException::class, Stringable::class);
    }

    /** @throws Throwable */
    public function testImplementsThrowable(): void
    {
        self::assertClassImplementsInterface(MissingDirectoryException::class, Throwable::class);
    }

    /** @throws Throwable */
    public function testWorkingDirectory(): void
    {
        $this->expectException(MissingDirectoryException::class);

        $invalidWorkingDirectory = $this->workspace . '/non-existent-directory';

        WorkingDirectory::new($invalidWorkingDirectory);
    }
}
