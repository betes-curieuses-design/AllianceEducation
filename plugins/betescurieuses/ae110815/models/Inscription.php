<?php namespace BetesCurieuses\Ae110815\Models;

use Model;

/**
 * Inscription Model
 */
class Inscription extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'betescurieuses_ae110815_inscriptions';

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
    public $belongsTo = [
        'event' => ['Radiantweb\Problog\Models\Post']
    ];


}