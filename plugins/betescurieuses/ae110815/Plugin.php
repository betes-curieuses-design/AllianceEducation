<?php namespace BetesCurieuses\Ae110815;

use System\Classes\PluginBase;
use Backend;
use Radiantweb\Problog\Controllers\Posts;
use Radiantweb\Problog\Models\Post as BasePost;
use Event;

/**
 * Ae110815 Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Ae110815',
            'description' => 'Alliance Education Plugin',
            'author' => 'BetesCurieuses',
            'icon' => 'icon-graduation-cap'
        ];
    }

    public function registerNavigation()
    {
        return [
            'aedu' => [
                'label' => 'Contenu',
                'url' => Backend::url('BetesCurieuses/Ae110815/conferences'),
                'icon' => 'icon-graduation-cap',
                'permissions' => ['rainlab.blog.*'],
                'order' => 500,

                'sideMenu' => [
                    'conferences' => [
                        'label' => 'Conférences',
                        'icon' => 'icon-eye',
                        'url' => Backend::url('BetesCurieuses/Ae110815/conferences'),
                        'permissions' => ['betescurieuses.ae110815.conferences']
                    ],
                    'formations' => [
                        'label' => 'Formations',
                        'icon' => 'icon-graduation-cap',
                        'url' => Backend::url('BetesCurieuses/Ae110815/formations'),
                        'permissions' => ['betescurieuses.ae110815.formations']
                    ],
                    'capsules' => [
                        'label' => 'Capsules Vidéo',
                        'icon' => 'icon-play-circle-o',
                        'url' => Backend::url('BetesCurieuses/Ae110815/capsules'),
                        'permissions' => ['betescurieuses.ae110815.capsules']
                    ]
                ]
            ]
        ];
    }

    public function boot()
    {

        Posts::extendFormFields(function ($form, $model, $context) {

            if (!$model instanceof BasePost)
                return;

            $form->addTabFields([
                    'date_event' => [
                        'label' => 'Date',
                        'type' => 'datepicker',
                        'tab' => 'radiantweb.problog::lang.backend.post.fields.tab.general',
                        'span' => 'left'
                    ],
                ]
            );


        });

    }

}
