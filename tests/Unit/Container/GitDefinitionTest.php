<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\Git\Container\Ghostwriter\Git\GitFactory;
use Ghostwriter\Git\Container\GitDefinition;
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
#[CoversClass(GitDefinition::class)]
final class GitDefinitionTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testGitDefinition(): void
    {
        $container = $this->createMock(ContainerInterface::class);

        $container->expects(self::once())->method('alias')->with(Git::class, GitInterface::class);
        $container->expects(self::once())->method('factory')->with(Git::class, GitFactory::class);

        (new GitDefinition())($container);
    }

    public function testImplementsDefinitionInterface(): void
    {
        self::assertTrue(is_a(GitDefinition::class, DefinitionInterface::class, true));
    }
}
