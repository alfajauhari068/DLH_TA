@extends('layouts.admin')

@section('title', 'Dashboard')
@section('subtitle', 'Welcome back, manage operations from a single control center.')

@section('actions')
    <a href="#" class="btn btn-outline-primary btn-sm">Overview report</a>
    <a href="#" class="btn btn-primary btn-sm">New content</a>
@endsection

@section('content')
    <x-admin.breadcrumb :items="[
        ['label' => 'Dashboard', 'url' => route('dashboard')],
        ['label' => 'Overview'],
    ]" />

    @include('widgets.dashboard.index', ['widgetCounts' => $widgetCounts])

    <div class="row g-4">
        <div class="col-12 col-xl-8">
            <x-admin.card title="Recent activities" subtitle="Latest system actions and pending review items.">
                <div class="table-responsive">
                    <table class="table table-borderless mb-0 align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Activity</th>
                                <th>Module</th>
                                <th>Status</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for($i = 0; $i < 4; $i++)
                                <tr>
                                    <td>Pending review for new content entry</td>
                                    <td>News</td>
                                    <td><span class="badge bg-warning text-dark">Pending</span></td>
                                    <td>2 hours ago</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </x-admin.card>
        </div>

        <div class="col-12 col-xl-4">
            <x-admin.card title="Quick shortcuts" subtitle="Most-used administration actions.">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">Create news article</a>
                    <a href="#" class="list-group-item list-group-item-action">Review gallery uploads</a>
                    <a href="#" class="list-group-item list-group-item-action">Manage website settings</a>
                    <a href="#" class="list-group-item list-group-item-action">Approve pending PPID</a>
                </div>
            </x-admin.card>

            <x-admin.card title="System information" class="mt-4" subtitle="Current platform status.">
                <dl class="row mb-0">
                    <dt class="col-6 text-muted">Last login</dt>
                    <dd class="col-6">—</dd>
                    <dt class="col-6 text-muted">PHP version</dt>
                    <dd class="col-6">{{ phpversion() }}</dd>
                    <dt class="col-6 text-muted">Laravel</dt>
                    <dd class="col-6">{{ app()->version() }}</dd>
                </dl>
            </x-admin.card>
        </div>
    </div>

    <x-admin.card title="Recent news" subtitle="Latest content items in the CMS." class="mt-4">
        <div class="row align-items-center mb-3">
            <div class="col-auto">
                <input type="search" class="form-control form-control-sm" placeholder="Search news..." aria-label="Search news">
            </div>
            <div class="col-auto">
                <button class="btn btn-sm btn-outline-primary">Filter</button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i = 0; $i < 4; $i++)
                        <tr>
                            <td>News headline example</td>
                            <td>Environment</td>
                            <td><span class="badge bg-success">Published</span></td>
                            <td>Today</td>
                            <td><button class="btn btn-sm btn-outline-secondary">Details</button></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </x-admin.card>
@endsection
