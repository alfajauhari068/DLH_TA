<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    protected $table = 'downloads';

    public function getUrlAttribute()
    {
        return asset('storage/' . $this->file);
    }

    public function getSizeAttribute()
    {
        $path = storage_path('app/public/' . $this->file);
        if (file_exists($path)) {
            $bytes = filesize($path);
            $units = ['B', 'KB', 'MB', 'GB'];
            for ($i = 0; $bytes >= 1024 && $i < count($units) - 1; $i++) {
                $bytes /= 1024;
            }
            return round($bytes, 2) . ' ' . $units[$i];
        }
        return 'Unknown';
    }
}
