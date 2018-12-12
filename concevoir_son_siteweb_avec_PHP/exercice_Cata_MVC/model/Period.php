<?php
// ---class to get all elements of catalog---
class Period
{
    public $listFormation;

    public function __construct()
    {
        $this->ListFormation = [];
    }

    // ---Array of all the objects constructed from the same class---
    function get_instances_of_class($class)
    {
        foreach ($GLOBALS as $value) {
            if (is_a($value, $class) || is_subclass_of($value, $class)) {
                array_push($this->ListFormation, $value);
            }
        }
    }
}
