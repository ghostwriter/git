<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Exception;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use Ghostwriter\Git\Interface\WorkingDirectoryInterface;
use Ghostwriter\Shell\Interface\ResultInterface;
use RuntimeException;
use Throwable;

use const PHP_EOL;

use function implode;
use function mb_trim;
use function sprintf;

final class GitCommandFailedException extends RuntimeException implements GitExceptionInterface
{
    public function __construct(
        private readonly ResultInterface $result,
        private readonly WorkingDirectoryInterface $workingDirectory,
        ?Throwable $previous = null
    ) {
        parent::__construct(sprintf(
            'Git command "%s" failed with exit code %s.%sSTDOUT: %s%sSTDERR: %s%sWorking Directory: %s%s',
            implode(' ', $result->command()),
            $result->exitCode(),
            PHP_EOL,
            mb_trim($result->stdout()),
            PHP_EOL,
            mb_trim($result->stderr()),
            PHP_EOL,
            $this->workingDirectory->toString(),
            PHP_EOL,
        ), previous: $previous);
    }

    public function result(): ResultInterface
    {
        return $this->result;
    }

    public function workingDirectory(): WorkingDirectoryInterface
    {
        return $this->workingDirectory;
    }
}
