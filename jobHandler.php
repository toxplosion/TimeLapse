<?php
/**
 * Created by PhpStorm.
 * User: zehnder
 * Date: 11.12.17
 * Time: 14:22
 */

class JobHandler extends Thread {

    private static $CAMERA_IP = "http://10.142.126.155/";
    private $name;
    private $interval;
    private $duration;
    private $fps;

    public function __construct($arg) {

        $this->name = $arg["name"];
        $this->interval = $arg["interval"];
        $this->duration = $arg["duration"];
        $this->fps = $arg["fps"];


    }



}

new JobHandler($_POST);








while(true) {



    if ($now+$duration > time()) {
        break;
    }

}

http_get($CAMERA_IP)


?>