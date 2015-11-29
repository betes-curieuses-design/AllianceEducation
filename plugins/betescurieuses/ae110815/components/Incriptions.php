<?php namespace BetesCurieuses\Ae110815\Components;

use Cms\Classes\ComponentBase;
use BetesCurieuses\Ae110815\Models\Inscription as BaseInscription;
use Radiantweb\Problog\Models\Post as BasePost;

class Incriptions extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Incriptions Form',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {

    }

    public function onSave()
    {
        $data = input();
        if (isset($data['event_id']) and $data['event_id'] != '') {
            $inscription = new BaseInscription;
            $inscription->name = $data['name'];
            $inscription->event_id = $data['event_id'];
            $inscription->email = $data['email'];
            $inscription->phone = $data['phone'];
            $inscription->save();

            $event = $this->updateEvent($data);
            if ($event) {
                $this->page['txt_msg'] = "Nous vous remercions pour votre inscription.";
                $this->page['type_msg'] = 'success';
            }
            else {
                $this->page['txt_msg'] = "Nous sommes désolés. Il n'y a pas suffisamment de places disponibles";
                $this->page['type_msg'] = 'danger';
            }
        }
    }

    protected function updateEvent($data)
    {
        $post = BasePost::where('id', $data['event_id'])->first();

        if ($post->available == 0) {
            return false;
        }else {
            $post->decrement('available');
            $post->save();

            return true;
        }
    }
}