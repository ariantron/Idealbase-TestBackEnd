<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Touch extends Model
{
    use HasFactory;

    protected $fillable = [
        'touch_subject_id',
        'subject',
        'name',
        'email',
        'website',
        'details'
    ];

    public function touchSubject(): HasOne
    {
        return $this->hasOne(TouchSubject::class, 'id', 'touch_subject_id');
    }
}
