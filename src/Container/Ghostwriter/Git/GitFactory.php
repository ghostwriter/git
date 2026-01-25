<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Container\Ghostwriter\Git;

use Ghostwriter\Container\Interface\ContainerInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Filesystem\Interface\FilesystemInterface;
use Ghostwriter\Git\Git;
use Override;
use Throwable;

/**
 * @see GitFactoryTest
 *
 * @implements FactoryInterface<Git>
 */
final readonly class GitFactory implements FactoryInterface
{
    /** @throws Throwable */
    #[Override]
    public function __invoke(ContainerInterface $container): Git
    {
        return Git::new($container->get(FilesystemInterface::class)->currentWorkingDirectory());
    }
}
