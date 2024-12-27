<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'category',
        'image_url',
    ];

    /**
     * Define the many-to-many relationship between courses and users.
     * 
     * This assumes the pivot table is named 'course_user',
     * and it has 'course_id' and 'user_id' columns as foreign keys.
     */

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id');
    }
}
