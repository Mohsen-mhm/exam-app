<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExamSetting extends Model
{
    protected $fillable = [
        'exam_id',
        'shuffle_questions',
        'shuffle_options',
        'allow_backtrack',
        'show_results_after_exam'
    ];

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }
}
