<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $postTitle;
    public $postContent;
    public $postLink;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($postTitle,$postContent,$postLink)
    {
        $this->postTitle=$postTitle;
        $this->postContent=$postContent;
        $this->postLink=$postLink;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.post');
    }
}
