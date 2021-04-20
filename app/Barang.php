<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'requests';
    protected $guarded = [];

    public function stockbarang()
    {
        return $this->belongsTo(Stock::class);
    }
}
