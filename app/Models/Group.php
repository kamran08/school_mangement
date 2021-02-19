<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function students()
    {
        return $this->hasMany(User::class, 'group_id');
    }

    public function sections()
    {
        return $this->hasMany(Section::class, 'group_id');
    }
}
