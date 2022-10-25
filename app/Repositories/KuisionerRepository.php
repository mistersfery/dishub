<?php

namespace App\Repositories;

use App\Models\Kuisioner;
use App\Repositories\BaseRepository;

/**
 * Class KuisionerRepository
 * @package App\Repositories
 * @version October 25, 2022, 3:48 am UTC
*/

class KuisionerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pertanyaan',
        'topik'
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
        return Kuisioner::class;
    }
}
