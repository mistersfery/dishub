<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Kuisioner
 * @package App\Models
 * @version October 25, 2022, 3:48 am UTC
 *
 * @property string $pertanyaan
 * @property string $topik
 */
class Kuisioner extends Model
{


    public $table = 'kuisioner';
    



    public $fillable = [
        'pertanyaan',
        'topik'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pertanyaan' => 'string',
        'topik' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
