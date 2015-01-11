<?php
 
class IndexController extends BaseController {
 
    /**
     * shows index page
     * @return void
     */
    public function getIndex() 
    {
        $this->layout->content = View::make('index');
    }
}