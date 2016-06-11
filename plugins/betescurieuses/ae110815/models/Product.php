<?php namespace Betescurieuses\Ae110815\Models;

use Model;

/**
 * Product Model
 */
class Product extends Model
{

    use \October\Rain\Database\Traits\Validation;
    /*
 * Validation
 */
    public $rules = [
        'title' => 'required',
        'slug' => ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:rainlab_blog_posts'],

    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'betescurieuses_ae110815_products';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    protected $dates = ['published_at'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $attachMany = [
        'featured_images' => ['System\Models\File', 'order' => 'sort_order'],
    ];

    public function scopeIsPublished($query)
    {
        return $query->whereNotNull('published')
            ->where('published', '1');
    }

}