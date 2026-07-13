<?php

namespace App\Services;

use App\Models\Program;
use Illuminate\Pagination\LengthAwarePaginator;

class ProgramService
{
    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return Program::query()->latest()->paginate($perPage);
    }

    public function create(array $data): Program
    {
        return Program::create($data);
    }

    public function update(Program $program, array $data): Program
    {
        $program->fill($data);
        $program->save();

        return $program;
    }

    public function delete(Program $program): bool
    {
        return $program->delete();
    }
}
