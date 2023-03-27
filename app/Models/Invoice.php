<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Permohonan;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoice';
    protected $guarded = [];

    public function permohonan(){
        return $this->belongsTo(Permohonan::class);
    }
}
