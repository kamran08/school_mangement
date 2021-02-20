<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'class_id','year'
    ];
    public function class()
    {
        return $this->belongsTo(clas::class, 'class_id');
    }
}
