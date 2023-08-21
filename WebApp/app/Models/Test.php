<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    public function question()
    {
        return $this->hasMany(Question::class);
        # code...
    }
    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
