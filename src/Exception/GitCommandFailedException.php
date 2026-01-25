<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Exception;

use Ghostwriter\Git\Interface\ExceptionI\GitExceptionInterface;
use RuntimeException;

final class GitCommandFailedException extends RuntimeException implements GitExceptionInterface {}
