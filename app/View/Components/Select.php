<?php

namespace App\View\Components;

use App\User;
use Illuminate\View\Component;

class Select extends Component
{
   public $name;
   public $selectType;
   public $selectTitle;
   public $dataShowSubtext;
   public $dataLiveSearch;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selectType,$selectTitle,$dataShowSubtext,$dataLiveSearch,$name)
    {
        $this->name=$name;
        $this->selectType=$selectType;
        $this->selectTitle=$selectTitle;
        $this->dataShowSubtext=$dataShowSubtext;
        $this->dataLiveSearch=$dataLiveSearch;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.select');
    }

    public function list()
    {

        return[
            'admin',
            'super admin',
            'user',

        ];
        // in dynamic method we can use this :
        //$users=User::all();
        //return $users;
    }
}
