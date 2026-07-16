@php
    $user = $user ?? new App\Models\User();
    $roles = $roles ?? collect();
@endphp

<div class="row g-3">
    <div class="col-12 col-md-6">
        <label for="name" class="form-label">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invalid @enderror" required>
        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror" required>
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="role_id" class="form-label">Role</label>
        <select id="role_id" name="role_id" class="form-select @error('role_id') is-invalid @enderror">
            <option value="">Select a role</option>
            @foreach($roles as $roleOption)
                <option value="{{ $roleOption->id }}" {{ old('role_id', $user->role_id) == $roleOption->id ? 'selected' : '' }}>{{ $roleOption->name }}</option>
            @endforeach
        </select>
        @error('role_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input id="phone" name="phone" type="text" value="{{ old('phone', $user->phone) }}" class="form-control @error('phone') is-invalid @enderror">
        @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="col-12 col-md-6">
        <label for="password" class="form-label">Password</label>
        <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" {{ isset($user->id) ? '' : 'required' }}>
        @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        @if(isset($user->id))
            <div class="form-text">Leave blank to keep the current password.</div>
        @endif
    </div>

    <div class="col-12 col-md-6">
        <label for="password_confirmation" class="form-label">Confirm password</label>
        <input id="password_confirmation" name="password_confirmation" type="password" class="form-control">
    </div>

    <div class="col-12 col-md-6">
        <label for="status" class="form-label">Status</label>
        <select id="status" name="status" class="form-select @error('status') is-invalid @enderror">
            <option value="1" {{ old('status', $user->status ?? 1) ? 'selected' : '' }}>Active</option>
            <option value="0" {{ old('status', $user->status ?? 1) === 0 ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
</div>
