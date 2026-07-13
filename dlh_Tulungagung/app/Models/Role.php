<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public static function permissionsFor(string $roleName): array
    {
        return match (strtolower(trim($roleName))) {
            'administrator' => [
                'Dashboard.View',
                'News.View', 'News.Create', 'News.Update', 'News.Delete',
                'Gallery.View', 'Gallery.Create', 'Gallery.Update', 'Gallery.Delete',
                'Publication.View', 'Publication.Create', 'Publication.Update', 'Publication.Delete',
                'Program.View', 'Service.View', 'PPID.View',
                'Page.View', 'Page.Create', 'Page.Update', 'Page.Delete',
                'Users.View', 'Users.Create', 'Users.Update', 'Users.Delete',
                'Settings.View', 'Settings.Update',
            ],
            'editor' => [
                'Dashboard.View',
                'News.View', 'News.Create', 'News.Update', 'News.Delete',
                'Gallery.View', 'Gallery.Create', 'Gallery.Update', 'Gallery.Delete',
                'Publication.View', 'Publication.Create', 'Publication.Update', 'Publication.Delete',
                'Program.View', 'Service.View', 'PPID.View',
                'Page.View', 'Page.Create', 'Page.Update', 'Page.Delete',
            ],
            'operator' => [
                'News.View', 'News.Create', 'News.Update',
                'Gallery.View', 'Publication.View', 'Program.View', 'Service.View', 'PPID.View',
                'Page.View',
            ],
            'guest' => [
                'News.View', 'Gallery.View', 'Publication.View', 'Program.View', 'Service.View', 'PPID.View',
                'Page.View',
            ],
            default => [],
        };
    }
}
