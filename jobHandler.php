<?php

$CAMERA_IP = "10.132.1.58";

$properties = unserialize($argv[1]);

print_r($properties);

$endTime = time() + $properties["duration"];

$filename = $properties["name"];
$image = 0;
while (time() < $endTime) {
    $startTime = time();
    $image++;
    copy("http://" . $CAMERA_IP . "/cgi-bin/video.jpg", "./tmpImages/" . $filename . "_image" . $image . ".jpg");

    /*
     * using this in case if the picture request will take longer than expected
     */
    $elapsed = time() - $startTime;

    sleep(($properties["interval"] - $elapsed));
}

/*
 * convert all images to video
 */
exec("ffmpeg -r " . $properties["fps"] . " -f image2 -i ./tmpImages/" . $filename . "_image%d.jpg -vcodec libx264 ./videos/" . $filename . time() . ".mp4");

/*
 * cleanup afterwards
 */
exec("rm ./tmpImages/*");
?>
