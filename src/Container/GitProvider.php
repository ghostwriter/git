<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Container;

use Ghostwriter\Container\Interface\BuilderInterface;
use Ghostwriter\Container\Service\Provider\AbstractProvider;
use Ghostwriter\Git\Container\Ghostwriter\Git\GitFactory;
use Ghostwriter\Git\Git;
use Ghostwriter\Git\Interface\GitInterface;
use Override;
use Throwable;

/**
 * @see GitProviderTest
 */
final class GitProvider extends AbstractProvider
{
    /** @throws Throwable */
    #[Override]
    public function register(BuilderInterface $builder): void
    {
        $builder->alias(GitInterface::class, Git::class);
        $builder->factory(Git::class, GitFactory::class);
    }
}
