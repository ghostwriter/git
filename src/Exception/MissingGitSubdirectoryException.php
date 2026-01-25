<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Exception;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use InvalidArgumentException;

final class MissingGitSubdirectoryException extends InvalidArgumentException implements GitExceptionInterface {}
