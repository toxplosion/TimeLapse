
<?php

    $properties = unserialize($argv[1]);

    print_r($properties);

    $endTime = time() + $properties["duration"];

    while (time() < $endTime) {
        $startTime = time();

        copy("http://10.142.126.155/cgi-bin/video.jpg", "./tmpImages/".time().".jpg");

        $elapsed = time() - $startTime;

        sleep(($properties["interval"] - $elapsed));
    }


?>
