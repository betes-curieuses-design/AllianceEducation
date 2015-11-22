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

    public function registerComponents()
    {
        return [
            'BetesCurieuses\Ae110815\Components\Quotes' => 'Quotes',
            'BetesCurieuses\Ae110815\Components\LastCapsule' => 'Lastcapsule',
            'BetesCurieuses\Ae110815\Components\LastFormation' => 'Lastformation',
            'BetesCurieuses\Ae110815\Components\LastConference' => 'Lastconference',
            'BetesCurieuses\Ae110815\Components\HomeBlog' => 'Homeblog',
            'BetesCurieuses\Ae110815\Components\Incriptions' => 'Incriptions',
        ];
    }

    public function registerNavigation()
    {
        return [
            'aedu' => [
                'label' => 'Contenu',
                'url' => Backend::url('BetesCurieuses/Ae110815/quotes'),
                'icon' => 'icon-tasks',
                'permissions' => ['rainlab.blog.*'],
                'order' => 500,

                'sideMenu' => [
                    'Quotes' => [
                        'label' => 'Quotes',
                        'icon' => 'icon-quote-right',
                        'url' => Backend::url('BetesCurieuses/Ae110815/quotes'),
                        'permissions' => ['betescurieuses.ae110815.quotes']
                    ],
                    'Incriptions' => [
                        'label' => 'Inscriptions',
                        'icon' => 'icon-list',
                        'url' => Backend::url('BetesCurieuses/Ae110815/inscriptions'),
                        'permissions' => ['betescurieuses.ae110815.inscriptions']
                    ],
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
                    'video' => [
                        'label' => 'Vidéo',
                        'type' => 'textarea',
                        'tab' => 'radiantweb.problog::lang.backend.post.fields.tab.general',
                        'size' => 'small'
                    ],
                    'date_event' => [
                        'label' => 'Date',
                        'type' => 'datepicker',
                        'tab' => 'radiantweb.problog::lang.backend.post.fields.tab.general',
                        'span' => 'left'
                    ],
                    'available' => [
                        'label' => 'Place disponible',
                        'type' => 'number',
                        'tab' => 'radiantweb.problog::lang.backend.post.fields.tab.general',
                        'span' => 'right'
                    ],

                ]
            );


        });

    }

}
