<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class CmsModuleRegistered
{
    use Dispatchable, SerializesModels;

    public $module;

    public function __construct(array $module)
    {
        $this->module = $module;
    }
}
