<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesananoffline extends Model
{
    use HasFactory;
    protected $table = 'pemesananoffline';
    protected $primarykey = 'id';
    protected $fillable = ['nama_pembeli','menu_offline','qty_offline','harga_offline','statusoffline','status_pesanan'];
}
