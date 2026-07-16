<?php

namespace App\Contracts\CMS;

interface WidgetContract
{
    public function name(): string;

    public function slug(): string;

    public function render(): array;
}
