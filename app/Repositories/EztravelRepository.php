<?php

namespace App\Repositories;

use App\Models\Eztravel;
use App\Repositories\BaseRepository;

/**
 * Class EztravelRepository
 * @package App\Repositories
 * @version November 16, 2021, 7:46 pm PST
*/

class EztravelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'origin',
        'destination',
        'flight_no',
        'departure_date',
        'arrival_date',
        'passengers',
        'carrier',
        'status',
        'travel_class'
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
        return Eztravel::class;
    }
}
