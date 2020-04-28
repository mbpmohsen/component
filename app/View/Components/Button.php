<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $buttonType;
    public $buttonName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($buttonType,$buttonName)
    {
        $this->buttonType=$buttonType;
        $this->buttonName=$buttonName;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.button');
    }
    //,['list'=>$this->list()]
    public function list()
    {
        return [
            'helllo',
            'Hi'
        ];
    }
}
