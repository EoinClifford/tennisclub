<?php

namespace App\Repositories;

use App\Models\membershiptype;
use App\Repositories\BaseRepository;

/**
 * Class membershiptypeRepository
 * @package App\Repositories
 * @version March 9, 2020, 2:09 pm UTC
*/

class membershiptypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'courthourlyfee'
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
        return membershiptype::class;
    }
}
