<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
