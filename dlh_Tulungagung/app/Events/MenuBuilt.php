<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class MenuBuilt
{
    use Dispatchable, SerializesModels;

    public $menu;

    public function __construct($menu)
    {
        $this->menu = $menu;
    }
}
