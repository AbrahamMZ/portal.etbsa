<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['file_name', 'file_path', 'file_size', 'file_ext'];

    public function fileable()
    {
        return $this->morphTo();
    }

    public function getPathAttribute()
    {
        return $this->pathURL();
    }

    public function pathURL()
    {
        if ($this->file_path) {
            return URL::to('/api/file/' . $this->id);
        }
    }

    protected $appends = [
        'path',
    ];
}
