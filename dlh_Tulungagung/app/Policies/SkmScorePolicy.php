<?php

namespace App\Policies;

class SkmScorePolicy extends CrudPolicy
{
    protected string $viewPermission = 'SkmScore.View';
    protected string $createPermission = 'SkmScore.Create';
    protected string $updatePermission = 'SkmScore.Update';
    protected string $deletePermission = 'SkmScore.Delete';
}
