<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

abstract class BaseCrudController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('viewAny', $this->modelClass());

        $items = $this->service()->paginate($request);

        return view($this->viewPath() . '.index', [$this->pluralVar() => $items]);
    }

    public function create()
    {
        $this->authorize('create', $this->modelClass());

        $modelClass = $this->modelClass();
        $model = new $modelClass();

        return view($this->viewPath() . '.create', [$this->singularVar() => $model]);
    }

    public function store(Request $request, Redirector $redirect)
    {
        $this->authorize('create', $this->modelClass());

        $data = method_exists($request, 'validated') ? $request->validated() : $request->all();

        $this->service()->create($data);

        return $redirect->route($this->routePrefix() . '.index')->with('success', 'Created successfully.');
    }

    public function show($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('view', $model);

        return view($this->viewPath() . '.show', [$this->singularVar() => $model]);
    }

    public function edit($id)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);

        return view($this->viewPath() . '.edit', [$this->singularVar() => $model]);
    }

    public function update(Request $request, mixed $id, Redirector $redirect)
    {
        $model = $this->resolveModel($id);
        $this->authorize('update', $model);

        $data = method_exists($request, 'validated') ? $request->validated() : $request->all();

        $this->service()->update($model, $data);

        return $redirect->route($this->routePrefix() . '.index')->with('success', 'Updated successfully.');
    }

    public function destroy($id, Redirector $redirect)
    {
        $model = $this->resolveModel($id);
        $this->authorize('delete', $model);

        $this->service()->delete($model);

        return $redirect->route($this->routePrefix() . '.index')->with('success', 'Deleted successfully.');
    }

    public function trash(Request $request)
    {
        $this->authorize('viewAny', $this->modelClass());

        $items = $this->service()->trash($request);

        return view($this->viewPath() . '.trash', [$this->pluralVar() => $items]);
    }

    public function restore($id, Redirector $redirect)
    {
        $model = $this->resolveTrashedModel($id);

        $this->authorize('restore', $model);

        $this->service()->restore($model);

        return $redirect->back()->with('success', 'Restored successfully.');
    }

    public function forceDelete($id, Redirector $redirect)
    {
        $model = $this->resolveTrashedModel($id);

        $this->authorize('forceDelete', $model);

        $this->service()->forceDelete($model);

        return $redirect->back()->with('success', 'Permanently deleted.');
    }

    protected function resolveModel($idOrModel): Model
    {
        if ($idOrModel instanceof Model) {
            return $idOrModel;
        }

        return $this->service()->find($idOrModel);
    }

    protected function resolveTrashedModel($idOrModel): Model
    {
        if ($idOrModel instanceof Model) {
            return $idOrModel;
        }

        return $this->service()->findTrashed($idOrModel);
    }

    abstract protected function service();
    abstract protected function modelClass(): string;
    abstract protected function viewPath(): string;
    abstract protected function routePrefix(): string;
    abstract protected function singularVar(): string;
    abstract protected function pluralVar(): string;
}
