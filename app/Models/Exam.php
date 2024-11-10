<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Exam extends Model
{
    protected $fillable = [
        'uuid',
        'title',
        'description',
        'duration',
        'start_time',
        'end_time',
        'status',
        'created_by',
    ];

    public function attempts(): HasMany
    {
        return $this->hasMany(ExamAttempt::class);
    }

    public function setting(): HasOne
    {
        return $this->hasOne(ExamSetting::class);
    }

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }
}
