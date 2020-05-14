<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendee extends Model
{
    use SoftDeletes;

    /**
     * @var int
     */
    public const MAX_ATTENDEES = 35;

    /**
     * @var string
     */
    public $table = 'attendees';

    /**
     * @var array
     */
    protected $dates = [ 'deleted_at' ];

    /**
     * @var array
     */
    public $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'age',
        'returning',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'city' => 'string',
        'age' => 'integer',
        'returning' => 'boolean',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|min:2|max:255',
        'last_name' => 'required|min:2|max:255',
        'email' => 'required|email',
        'city' => 'required|min:2|max:255',
        'age' => 'required|integer|min:13|max:255',
        'returning' => 'required',
    ];

}
