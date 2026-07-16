<?php

namespace App\Contracts\CMS;

interface ModuleContract
{
    public function name(): string;
    public function slug(): string;
    public function route(): ?string;
    public function icon(): ?string;
    public function group(): ?string;
    public function order(): int;
    public function enabled(): bool;
    public function permissionPrefix(): ?string;
    public function toArray(): array;
}
