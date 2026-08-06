<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Exception;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use InvalidArgumentException;

final class MissingDirectoryException extends InvalidArgumentException implements GitExceptionInterface {}
