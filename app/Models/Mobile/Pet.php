<?php

namespace App\Models\Mobile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pet';
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }     
}