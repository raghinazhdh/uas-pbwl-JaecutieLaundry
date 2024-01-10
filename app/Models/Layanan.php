<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = "tb_layanan";

    protected $primaryKey = "lay_id";

    protected $guarded = [];
}
