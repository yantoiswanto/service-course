<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';

    protected $fillable = [
        'name', 'certificate', 'thumbnail', 'type',
        'status', 'description', 'price', 'level',
        'mentor_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y:m-d H:m:s',
        'updated_at' => 'datetime:Y:m-d H:m:s'
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class)->orderBy('id', 'asc');
    }

    public function images()
    {
        return $this->hasMany(ImageCourse::class)->orderBy('id', 'desc');
    }
}
