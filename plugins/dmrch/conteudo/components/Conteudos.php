<?php namespace Dmrch\Conteudo\Components;

use Cms\Classes\ComponentBase;

class Conteudos extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Conteudos Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getAll() {
        return \Dmrch\Conteudo\Models\Conteudos::first();
    }
}
