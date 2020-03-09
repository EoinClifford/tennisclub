<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class membershiptype
 * @package App\Models
 * @version March 9, 2020, 2:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection members
 * @property number courthourlyfee
 */
class membershiptype extends Model
{

    public $table = 'membershiptype';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'courthourlyfee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'membershiptype' => 'string',
        'courthourlyfee' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function members()
    {
        return $this->hasMany(\App\Models\Member::class, 'membertype');
    }
}
