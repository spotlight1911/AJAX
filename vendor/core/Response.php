<?php


class Response
{
    public static function sendJSON($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}