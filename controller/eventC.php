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

    public function insertEvent($id_user, $name_event, $img_event, $end_event)
    {
        $event = new Event();
        $insertEvent = $event->insertEvent($id_user, $name_event, $img_event, $end_event);
        if ($insertEvent) {
            header('location:index.php?url=event');
        }
    }
    public function updateEvent($id_event, $name_event, $img_event, $end_event)
    {
        $event = new Event();
        $updateEvent = $event->updateEvent($id_event, $name_event, $img_event, $end_event);
        if ($updateEvent) {
            header('location:index.php?url=event');
        }
    }
}
