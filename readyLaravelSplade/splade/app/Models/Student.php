<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     *
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'phone_number',
        'section_id',
        'class_id',
    ];

    
    public function class(){
        return $this ->belongsTo(Classes::class, 'class_id');
    }
    
    public function section(){
        return $this->belongsTo(Section::class);
    }
}
