<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use SoftDeletes;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
            'test_id',
            'QuestionContent',
            'OptionA',
            'OptionB',
            'OptionC',
            'OptionD',
            'CorrectOption'];
            public function test()
            {
                return $this->BelongsTo(Test::class);
            }
            //xoa mem
           
            protected $dates = ['deleted_at'];
}
