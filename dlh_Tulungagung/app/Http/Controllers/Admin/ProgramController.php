<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProgramRequest;
use App\Http\Requests\Admin\UpdateProgramRequest;
use App\Models\Program;
use App\Services\ProgramService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProgramController extends Controller
{
    public function __construct(protected ProgramService $programService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', Program::class);

        $programs = $this->programService->paginate($request->query('per_page', 15));

        return view('admin.programs.index', compact('programs'));
    }

    public function create(): View
    {
        $this->authorize('create', Program::class);

        return view('admin.programs.create');
    }

    public function store(StoreProgramRequest $request): RedirectResponse
    {
        $this->authorize('create', Program::class);

        $this->programService->create($request->validated());

        return redirect()->route('admin.programs.index')->with('success', 'Program created successfully.');
    }

    public function show(Program $program): View
    {
        $this->authorize('view', $program);

        return view('admin.programs.show', compact('program'));
    }

    public function edit(Program $program): View
    {
        $this->authorize('update', $program);

        return view('admin.programs.edit', compact('program'));
    }

    public function update(UpdateProgramRequest $request, Program $program): RedirectResponse
    {
        $this->authorize('update', $program);

        $this->programService->update($program, $request->validated());

        return redirect()->route('admin.programs.index')->with('success', 'Program updated successfully.');
    }

    public function destroy(Program $program): RedirectResponse
    {
        $this->authorize('delete', $program);

        $this->programService->delete($program);

        return redirect()->route('admin.programs.index')->with('success', 'Program deleted successfully.');
    }
}
