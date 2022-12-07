<?php
function upload($file_tmp)
{
    $IMGUR_CLIENT_ID = "f19f6664ee17670";
    $tmp = $file_tmp;
    $sound = file_get_contents($tmp);
    $postFields = array('image' => base64_encode($sound));
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.imgur.com/3/image');
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $IMGUR_CLIENT_ID));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    $response = curl_exec($ch);
    curl_close($ch);
    // Decode API response to array 
    $responseArr = json_decode($response);
    $src = $responseArr->data->link;
    return $src;
}
