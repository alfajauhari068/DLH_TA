<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class NavigationLoaded
{
    use Dispatchable, SerializesModels;

    public function __construct()
    {
    }
}
