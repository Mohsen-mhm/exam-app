<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'exam_attempt_id',
        'question_id',
        'selected_option_id',
        'text_answer',
        'is_correct'
    ];
}
