<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Eztravel
 * @package App\Models
 * @version November 16, 2021, 7:46 pm PST
 *
 * @property string $origin
 * @property string $destination
 * @property integer $flight_no
 * @property string $departure_date
 * @property string $arrival_date
 * @property string $passengers
 * @property string $carrier
 * @property string $status
 * @property string $travel_class
 */
class Eztravel extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'eztravel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'origin' => 'string',
        'destination' => 'string',
        'flight_no' => 'integer',
        'departure_date' => 'date',
        'arrival_date' => 'date',
        'passengers' => 'string',
        'carrier' => 'string',
        'status' => 'string',
        'travel_class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'origin' => 'required|string|max:255',
        'destination' => 'required|string|max:255',
        'flight_no' => 'required',
        'departure_date' => 'required',
        'arrival_date' => 'required',
        'passengers' => 'required|string|max:255',
        'carrier' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'travel_class' => 'required|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
