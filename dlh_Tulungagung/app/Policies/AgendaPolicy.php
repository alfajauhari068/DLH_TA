<?php

namespace App\Policies;

class AgendaPolicy extends CrudPolicy
{
    protected string $viewPermission = 'Agenda.View';
    protected string $createPermission = 'Agenda.Create';
    protected string $updatePermission = 'Agenda.Update';
    protected string $deletePermission = 'Agenda.Delete';
}
