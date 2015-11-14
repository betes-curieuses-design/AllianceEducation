<?php namespace BetesCurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use RainLab\Blog\Components\Posts;
use RainLab\Blog\Models\Post as BlogPost;

class HomeBlog extends Posts
{

    public function componentDetails()
    {
        return [
            'name'        => 'Home Blog',
            'description' => 'Show last 4 blogs'
        ];
    }

    protected function listPosts()
    {
        $categories = $this->category ? $this->category->id : null;

        /*
         * List all the posts, eager load their categories
         */
        $posts = BlogPost::with('categories')->listFrontEnd([
            'page'       => 1,
            'sort'       => $this->property('sortOrder'),
            'perPage'    => 4,
            'categories' => $categories
        ]);

        /*
         * Add a "url" helper attribute for linking to each post and category
         */
        $posts->each(function($post){
            $post->setUrl($this->postPage, $this->controller);

            $post->categories->each(function($category){
                $category->setUrl($this->categoryPage, $this->controller);
            });
        });

        return $posts;
    }

}