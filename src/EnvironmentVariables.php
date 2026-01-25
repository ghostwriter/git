<?php

declare(strict_types=1);

namespace Ghostwriter\Git;

use Ghostwriter\Git\Interface\EnvironmentVariablesInterface;
use Override;

use function array_merge;
use function getenv;

final readonly class EnvironmentVariables implements EnvironmentVariablesInterface
{
    /** @param array<string,string> $environmentVariables */
    public function __construct(
        private array $environmentVariables,
    ) {}

    /** @param array<string,string> $environmentVariables */
    public static function new(array $environmentVariables = []): self
    {
        return new self(array_merge(getenv() ?: [], $environmentVariables));
    }

    /** @return array<string,string> */
    #[Override]
    public function toArray(): array
    {
        return $this->environmentVariables;
    }
}
