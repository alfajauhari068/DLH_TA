<?php

namespace App\Contracts;

interface CrudRepositoryInterface
{
    public function paginate(array $params = []);
    public function find($id);
    public function create(array $data);
    public function update($model, array $data);
    public function delete($model);
}
