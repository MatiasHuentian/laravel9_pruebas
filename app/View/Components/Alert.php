<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $color;

    public function __construct( $color = "orange" )
    {
        $this->color = $color;
    }

    public function render()
    {
        return view('components.alert');
    }

    public function prueba(){
        if( $this->color == 'red' ){
            return "Este es una alerta de peligro";
        }else{

        }
    }
}
