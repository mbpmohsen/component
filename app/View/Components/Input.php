<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $type;
    public $placeHolder;
    public $inputTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$type,$placeHolder,$inputTitle)
    {
        $this->name=$name;
        $this->type=$type;
        $this->placeHolder=$placeHolder;
        $this->inputTitle=$inputTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.input');
    }
}
