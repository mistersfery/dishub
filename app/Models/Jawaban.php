<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Jawaban
 * @package App\Models
 * @version October 25, 2022, 3:57 am UTC
 *
 * @property string $idkuisioner
 * @property string $pilihan
 * @property string $jawaban
 * @property string $poin
 */
class Jawaban extends Model
{


    public $table = 'jawaban';
    



    public $fillable = [
        'idkuisioner',
        'pilihan',
        'jawaban',
        'poin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idkuisioner' => 'string',
        'pilihan' => 'string',
        'jawaban' => 'string',
        'poin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
