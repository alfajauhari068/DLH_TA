<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService extends ModuleService
{
    public function __construct()
    {
        parent::__construct(Department::class, [
            'slug' => true,
        ]);
    }
}
