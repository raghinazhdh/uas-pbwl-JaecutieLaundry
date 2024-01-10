<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;
use App\Models\Users;
use App\Models\Layanan;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "tb_transaksi";

    protected $primaryKey = "trans_id";

    protected $guarded = [];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'trans_pel_id', 'pel_id');
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'trans_lay_id', 'lay_id');
    }

    public function users()
    {
        return $this->belongsTo(Users::class, 'user_id', 'id');
    }
}
