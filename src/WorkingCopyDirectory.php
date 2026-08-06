<?php

declare(strict_types=1);

namespace Ghostwriter\Git;

use Ghostwriter\Git\Exception\MissingGitSubdirectoryException;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;

use const DIRECTORY_SEPARATOR;

use function is_dir;
use function sprintf;

final readonly class WorkingCopyDirectory implements WorkingDirectoryInterface
{
    public function __construct(
        private string $path
    ) {
        if (! is_dir($path . DIRECTORY_SEPARATOR . '.git')) {
            throw new MissingGitSubdirectoryException(
                sprintf('The directory "%s" is not a Git working directory.', $path)
            );
        }
    }

    public static function new(string $path): self
    {
        return new self($path);
    }

    public function toString(): string
    {
        return $this->path;
    }
}
