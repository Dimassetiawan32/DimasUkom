<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Riquest extends Model
{
    use AutoNumberTrait;
    
    protected $table = 'requests';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
         return [
            'kode_request' => [
                'format' => 'REQ.2021.?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }

    public function stockbarang()
    {
        return $this->belongsTo(Stock::class);
    }
}
