<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(protected UserService $userService)
    {
    }

    public function index(Request $request): View
    {
        $this->authorize('viewAny', \App\Models\User::class);

        $users = $this->userService->paginate($request->query('per_page', 15));

        return view('admin.users.index', compact('users'));
    }

    public function create(): View
    {
        $this->authorize('create', \App\Models\User::class);
        $roles = \App\Models\Role::all();

        return view('admin.users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $this->authorize('create', \App\Models\User::class);

        $this->userService->create($request->validated());

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    public function show(
        \App\Models\User $user
    ): View {
        $this->authorize('view', $user);

        return view('admin.users.show', compact('user'));
    }

    public function edit(
        \App\Models\User $user
    ): View {
        $this->authorize('update', $user);
        $roles = \App\Models\Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, \App\Models\User $user): RedirectResponse
    {
        $this->authorize('update', $user);

        $this->userService->update($user, $request->validated());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(\App\Models\User $user): RedirectResponse
    {
        $this->authorize('delete', $user);

        $this->userService->delete($user);

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
