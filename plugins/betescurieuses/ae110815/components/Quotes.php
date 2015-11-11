<?php namespace BetesCurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Ae110815\Models\Quote;

class Quotes extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Quotes',
            'description' => 'Show ramdom quote'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['quotes'] = Quote::orderByRaw("RAND()")->take(1)->get();
    }

}