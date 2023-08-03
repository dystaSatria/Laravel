<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     *
     */
    protected $fillable = [
        'class_id',
        'name',
    ];

    
    public function class(){
        return $this ->belongsTo(Classes::class, 'class_id');
    }
    
    public function students(){
        return $this->hasMany(Section::class);
    }
}
