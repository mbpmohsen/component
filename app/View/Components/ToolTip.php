<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ToolTip extends Component
{
    public $title;
    public $dataPlacement;
    public $toolTipType;
    public $toolTipName;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title,$dataPlacement,$toolTipType,$toolTipName)
    {
        $this->title=$title;
        $this->dataPlacement=$dataPlacement;
        $this->toolTipType=$toolTipType;
        $this->toolTipName=$toolTipName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tool-tip');
    }
}
