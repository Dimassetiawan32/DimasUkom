<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Suplier extends Model
{
    use AutoNumberTrait;

    protected $table = 'supliers';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
         return [
            'kode_suplier' => [
                'format' => 'SUP.2021.?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }

    public function stock()
    {
        return $this->hasMany(Stock::class);
    }

}
