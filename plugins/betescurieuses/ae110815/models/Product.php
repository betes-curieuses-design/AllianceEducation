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

    public static $allowedSortingOptions = array(
        'title asc' => 'Title (ascending)',
        'title desc' => 'Title (descending)',
        'created_at asc' => 'Created (ascending)',
        'created_at desc' => 'Created (descending)',
        'updated_at asc' => 'Updated (ascending)',
        'updated_at desc' => 'Updated (descending)',
        'published_at asc' => 'Published (ascending)',
        'published_at desc' => 'Published (descending)',
        'random' => 'Random'
    );

    public function scopeIsPublished($query)
    {
        return $query->whereNotNull('published')
            ->where('published', '1');
    }

    public function scopeListProducts($query, $options)
    {
        /*
         * Default options
         */
        extract(array_merge([
            'page'       => 1,
            'perPage'    => 30,
            'sort'       => 'published_at',
            'search'     => '',
            'published'  => true
        ], $options));

        $searchableFields = ['title', 'slug', 'description', 'included'];

        if ($published) {
            $query->isPublished();
        }

        /*
         * Sorting
         */
        if (!is_array($sort)) {
            $sort = [$sort];
        }

        foreach ($sort as $_sort) {

            if (in_array($_sort, array_keys(self::$allowedSortingOptions))) {
                $parts = explode(' ', $_sort);
                if (count($parts) < 2) {
                    array_push($parts, 'desc');
                }
                list($sortField, $sortDirection) = $parts;
                if ($sortField == 'random') {
                    $sortField = DB::raw('RAND()');
                }
                $query->orderBy($sortField, $sortDirection);
            }
        }

        /*
         * Search
         */
        $search = trim($search);
        if (strlen($search)) {
            $query->searchWhere($search, $searchableFields);
        }


        return $query->paginate($perPage, $page);
    }

}