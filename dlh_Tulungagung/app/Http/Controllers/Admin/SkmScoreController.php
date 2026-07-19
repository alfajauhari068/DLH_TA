<?php

namespace App\Http\Controllers\Admin;

use App\Models\SkmScore;
use App\Services\SkmScoreService;

class SkmScoreController extends BaseCrudController
{
    protected $service;

    protected array $searchFields = ['year', 'period', 'category'];
    protected array $sortableFields = ['year', 'period', 'score'];
    protected array $filterFields = ['year', 'period'];

    public function __construct(SkmScoreService $service)
    {
        $this->service = $service;
    }

    protected function service()
    {
        return $this->service;
    }

    protected function modelClass(): string
    {
        return SkmScore::class;
    }

    protected function viewPath(): string
    {
        return 'admin.skm_scores';
    }

    protected function routePrefix(): string
    {
        return 'admin.skm-scores';
    }

    protected function singularVar(): string
    {
        return 'skmScore';
    }

    protected function pluralVar(): string
    {
        return 'skmScores';
    }
}
