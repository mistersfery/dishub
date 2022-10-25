<?php

namespace App\Repositories;

use App\Models\Jawaban;
use App\Repositories\BaseRepository;

/**
 * Class JawabanRepository
 * @package App\Repositories
 * @version October 25, 2022, 3:57 am UTC
*/

class JawabanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idkuisioner',
        'pilihan',
        'jawaban',
        'poin'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Jawaban::class;
    }
}
