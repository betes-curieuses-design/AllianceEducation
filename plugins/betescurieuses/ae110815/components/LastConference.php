<?php namespace Betescurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use Radiantweb\Problog\Components\Post;
use Radiantweb\Problog\Models\Post  as PostModel;

class LastConference extends Post
{

    public function componentDetails()
    {
        return [
            'name'        => 'Last Conference',
            'description' => 'Show the last conference on Home page'
        ];
    }

    public function onRun()
    {

        $this->addJs('/plugins/radiantweb/problog/assets/google-code-prettify/prettify.js');
        $this->addJs('/plugins/radiantweb/problog/assets/google-code-prettify/run_prettify.js?skin=sunburst');

        $this->getPost();

        if(!is_null($this->post) && ($this->post->published < 1 && !$this->user())){
            return \Response::make($this->controller->run('404'), 404);
        }

        if(!is_null($this->post) && !$this->render_category){
            /* set up metas for this post */

            $this->page['conference'] = $this->post;

        }
    }

    public function getPost()
    {
        if ($this->post !== null)
            return $this->post;

        $this->post = PostModel::orderBy('created_at','desc')
            ->where('categories_id', 4)->first();

        if(is_null($this->post)){
            return \Response::make($this->controller->run('404'), 404);
        }else{
            return $this->post;
        }
    }

}