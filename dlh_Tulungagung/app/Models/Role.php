<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public static function permissionsFor(string $roleName): array
    {
        return match (strtolower(trim($roleName))) {
            'administrator' => [
                'Dashboard.View',
                'News.View', 'News.Create', 'News.Update', 'News.Delete',
                'Gallery.View', 'Gallery.Create', 'Gallery.Update', 'Gallery.Delete',
                'Publication.View', 'Publication.Create', 'Publication.Update', 'Publication.Delete',
                'Program.View', 'Program.Create', 'Program.Update', 'Program.Delete',
                'Service.View', 'Service.Create', 'Service.Update', 'Service.Delete',
                'PPID.View',
                'Page.View', 'Page.Create', 'Page.Update', 'Page.Delete',
                'Users.View', 'Users.Create', 'Users.Update', 'Users.Delete',
                'Settings.View', 'Settings.Update',
            ],
            default => [],
        };
    }
}
