<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'group_id','class_id'
    ];
    public function students()
    {
        return $this->hasMany(User::class, 'section_id');
    }
    public function class()
    {
        return $this->hasOne(clas::class, 'class_id');
    }
}
