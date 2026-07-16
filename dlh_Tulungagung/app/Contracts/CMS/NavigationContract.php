<?php

namespace App\Contracts\CMS;

use Illuminate\Support\Collection;

interface NavigationContract
{
    public function build(): Collection;
}
