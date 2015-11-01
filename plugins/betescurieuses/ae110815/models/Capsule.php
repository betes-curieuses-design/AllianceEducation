<?php namespace BetesCurieuses\Ae110815\Models;

use Model;

/**
 * Capsule Model
 */
class Capsule extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'betescurieuses_ae110815_capsules';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}