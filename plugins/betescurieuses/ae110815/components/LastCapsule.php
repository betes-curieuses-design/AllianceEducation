<?php namespace BetesCurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Radiantweb\Problog\Components\Post;
use Radiantweb\Problog\Models\Post  as PostModel;

class LastCapsule extends Post
{

    public function componentDetails()
    {
        return [
            'name'        => 'Last Capsule',
            'description' => 'Show the last capsule on Home page'
        ];
    }

    public function getPost()
    {
        if ($this->post !== null)
            return $this->post;

        $this->post = PostModel::orderBy('created_at','desc')
            ->where('categories_id', 2)->first();

        if(is_null($this->post)){
            return \Response::make($this->controller->run('404'), 404);
        }else{
            return $this->post;
        }
    }

}