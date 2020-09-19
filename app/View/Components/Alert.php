<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $message;
    public $type;
    
    
    public function __construct($type, $message)
    {
        $this->message = $message;
        $this->type =  \strtolower($type);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.alert', ['message'=>$this->message]);
    }
}
