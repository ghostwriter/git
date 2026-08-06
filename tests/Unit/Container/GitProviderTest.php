<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\ProviderInterface;
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
final class GitProviderTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testGitProvider(): void
    {
        $container = $this->createMock(ContainerInterface::class);

        $container->expects(self::once())->method('alias')->with(GitInterface::class, Git::class);
        $container->expects(self::once())->method('factory')->with(Git::class, GitFactory::class)
            ->seal();

        $gitProvider = new GitProvider();
        $gitProvider->register($container);
    }

    public function testImplementsProviderInterface(): void
    {
        self::assertTrue(is_a(GitProvider::class, ProviderInterface::class, true));
    }
}
