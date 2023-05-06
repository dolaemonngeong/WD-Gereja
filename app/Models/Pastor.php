<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastor extends Model
{
    use HasFactory;
    protected $fillable =[
        "name",
        "posisi",
        "image"
      
    ];

    private static $pastors = [
        [
            'id' => 1,
            'name' => 'Rm. Yoseph Utus, O.Carm',
            'posisi' => 'Pastor Kepala Paroki',
            'image' => '1.jpeg',
        ],
        [
            'id' => 2,
            'name' => 'Rm. Yohanes Adrianus Muga, O.Carm',
            'posisi' => 'Pastor Rekan',
            'image' => '2.jpg',
        ]
    ];

    public static function index(){
        return collect(self::$pastors);
    }

   

}
