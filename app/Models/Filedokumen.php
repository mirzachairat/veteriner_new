<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permohonan;

class Filedokumen extends Model
{
    use HasFactory;
    protected $table = 'filedokumen';
    protected $guarded = [];

    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class);
    }
}
