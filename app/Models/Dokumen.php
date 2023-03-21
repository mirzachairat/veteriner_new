<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workflow;

class Dokumen extends Model
{
    use HasFactory;
    protected $table = 'dokumen';
    protected $guarded = [];
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
    public function workflow()
    {
        return $this->belongsTo(Workflow::class, 'id');
    }
}