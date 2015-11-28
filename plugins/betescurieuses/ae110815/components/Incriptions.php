<?php namespace BetesCurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Ae110815\Models\Inscription as BaseInscription;

class Incriptions extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Incriptions Form',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {

    }

    public function onSave() {
        $data = input();
        $inscription = new BaseInscription;
        $inscription->name = $data['name'];
        $inscription->event_id = $data['event_id'];
        $inscription->email = $data['email'];
        $inscription->phone = $data['phone'];
        $inscription->save();

    }

}