<?php

declare(strict_types=1);

namespace Ghostwriter\Git\Interface;

interface EnvironmentVariablesInterface
{
    /** @return array<string, string> */
    public function toArray(): array;
}
