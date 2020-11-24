<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'name',
        'relationship',
        'age',
        'job',
        'live_together',
        'agreement'
    ];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class);
    }
}
