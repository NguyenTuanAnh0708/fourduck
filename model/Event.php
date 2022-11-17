<?php
class Event
{
    public function getAllEvent()
    {
        $conn = conn();
        $sql = "SELECT * FROM event Order by status";
        $result = $conn->query($sql);
        $data = array();
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function updateStatus()
    {
        $conn = conn();
        $sql = "UPDATE Event
        SET status= CASE
           WHEN date(now())>date(end_event) THEN 1
           ELSE 0
        END";
        $update  = $conn->query($sql);
        return $update;
    }
    // event
    public function inserNewEvent()
    {
        $id_user = $_POST['id_user'];
        $name_event = $_POST['name_event'];
        $img_event = $_FILES['img_event']['name'];


        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES['img_event']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


        // validate file img 
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES['img_event']['name']);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($_FILES['img_event']['name'] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }


        move_uploaded_file($_FILES["img_event"]["tmp_name"], $target_file);

        $conn = conn();
        $sql = "INSERT INTO event (
            id_user,
            name_event,
            img_event
        ) VALUES (
            '$id_user',
            '$name_event',
            '$img_event'
        )";
        $result = $conn->query($sql);
        return $result;
    }


    public function deleteEvent($id_event)
    {
        $conn = conn();
        $sql = "DELETE FROM event WHERE id_event = '$id_event'";
        $result = $conn->query($sql);
        return $result;
    }
}
