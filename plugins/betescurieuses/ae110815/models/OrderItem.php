<?php namespace Betescurieuses\Ae110815\Models;

use Model;

/**
 * OrderItem Model
 */
class OrderItem extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'betescurieuses_ae110815_order_items';

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
    public $belongsTo = [
        'product' => ['Betescurieuses\Ae110815\Models\Product']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}