<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurmaModel extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['nome','observacao'];
    public $timestamps = false;
}
