<?php

declare(strict_types=1);

namespace App\FunctionalStability\Domain\DTO;

final readonly class SimpleSearchDTO
{
    public function __construct(
        public ?array $nodes = null,
        public ?array $edges = null,
    ) {
    }
}
