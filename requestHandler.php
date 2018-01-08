<?php

if (array_key_exists("cancel", $_POST)) {

    unlink("process.txt");

} else {

    if (file_exists("process.txt")) {

        header("Location: ./index.php?running=true");

    } else {

        /*
        * execute php script in background and redirect to index
        */
        exec("php jobHandler.php " . escapeshellarg(serialize($_POST)) . " > /dev/null & echo $!", $pid);

        file_put_contents("process.txt", $pid);
    }



}

header("Location: ./index.php");

?>