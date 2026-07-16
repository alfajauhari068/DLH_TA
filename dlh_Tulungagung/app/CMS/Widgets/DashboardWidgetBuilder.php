<?php

namespace App\CMS\Widgets;

use Illuminate\Support\Collection;

class DashboardWidgetBuilder
{
    public function __construct(protected WidgetManager $manager)
    {
    }

    public function build(): Collection
    {
        return $this->manager->all();
    }
}
