<?php
class Formation
{
    // initialization variables
    public $id;
    public $title;
    public $obj;
    public $price;
    public $time;
    public $image;
    public $caption;
    public $captionWriter;
    public $quantity;

    public function __construct($aId,$atitle,$adesc,$aprice,$atime,$aimage,
    $acaption,$acaptionWriter)
    {
        $this->Id = $aId;
        $this->Title = $atitle;
        $this->Obj = $adesc;
        $this->Price = $aprice;
        $this->Time = $atime;
        $this->Image = $aimage;
        $this->Caption = $acaption;
        $this->Writer = $acaptionWriter;
    }
}
