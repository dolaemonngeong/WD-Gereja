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
            'name' => 'Rm. Robertus Andy Priambada, O.Carm',
            'posisi' => 'Romo Rekan',
            'image' => '2.jpeg',
        ]
    ];

    public static function index(){
        return collect(self::$pastors);
    }

   

}
