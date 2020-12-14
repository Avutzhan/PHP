<?php

include_once("Classes/Component.php");

class Leaf extends Component
{
    public function operation(): string
    {
        return "Leaf";
    }
}