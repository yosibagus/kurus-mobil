<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentorModel extends Model
{
    use HasFactory;
    protected $table = "tb_tentor";
    protected $guarded = [];
}
