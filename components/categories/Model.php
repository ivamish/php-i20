<?php


namespace components\categories;


use components\BaseModel;

class Model extends BaseModel
{
    public function exc() : array
    {
        $categories = $this->get_categories();
        return compact('categories');
    }
}