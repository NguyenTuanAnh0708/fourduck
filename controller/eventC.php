<?php
require './model/Event.php';
class eventC
{

    public function getAllEvent()
    {
        $event = new Event();
        $checkUpdateStatus = $event->updateStatus();
        if ($checkUpdateStatus) {
            $dataEvent = $event->getAllEvent();
        }
        return $dataEvent;
    }

    public function deleteEvent($id_event)
    {
        $event = new Event();
        $delEvent = $event->deleteEvent($id_event);
        if ($delEvent) {
            header("Location: index.php?url=event");
        }
    }

    public function updateEvent($id_event)
    {
        echo ("oke");
    }
}
