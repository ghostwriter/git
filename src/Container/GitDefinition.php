<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Container;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\Git\Container\Ghostwriter\Git\GitFactory;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\GitInterface;
use Override;
use Throwable;

/**
 * @see GitDefinitionTest
 */
final readonly class GitDefinition implements DefinitionInterface
{
    /** @throws Throwable */
    #[Override]
    public function __invoke(ContainerInterface $container): void
    {
        $container->alias(GitInterface::class, Git::class);
        $container->factory(Git::class, GitFactory::class);
    }
}
