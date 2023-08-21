<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $fillable=[
       
        'id',	
        'user_id',	
        'test_id',	
        'DateTaken',	
        'Score',	
        'Duration',	
        'Status'
    ];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
