<?php
require './model/Event.php';
class eventC
{

    public function getAllEvent()
    {       
            $event = new Event();
            $dataEvent = $event -> getAllEvent();
            return $dataEvent;
    }
  
}

