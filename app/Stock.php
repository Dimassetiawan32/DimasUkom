<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Stock extends Model
{
    use AutoNumberTrait;

    protected $table = 'stockbarangs';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
         return [
            'kode_barang' => [
                'format' => 'BRG.2021.?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }

    public function suplier()
    {
        return $this->belongsTo(Suplier::class);
    }

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
