<?php namespace Dmrch\Conteudo;

use Backend;
use System\Classes\PluginBase;

/**
 * Conteudo Plugin Information File
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
            'name'        => 'Conteudo',
            'description' => 'No description provided yet...',
            'author'      => 'Dmrch',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Dmrch\Conteudo\Components\Conteudos' => 'conteudos',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'dmrch.conteudo.some_permission' => [
                'tab' => 'Conteudo',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'conteudo' => [
                'label'       => 'Conteudo',
                'url'         => Backend::url('dmrch/conteudo/conteudos/update/1'),
                'icon'        => 'icon-leaf',
                'permissions' => ['dmrch.conteudo.*'],
                'order'       => 500,
            ],
        ];
    }
}
