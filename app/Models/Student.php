<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'skill', 'bio'];
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function classroom() {
        return $this->belongsTo(Classroom::class);
    }
}
