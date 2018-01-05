<?php

session_start();

$_POST["session"] = session_id();

if (array_key_exists("cancel", $_POST)) {

    unlink("process.txt");

} else {

    file_put_contents("process.txt", "running");
    /*
     * execute php script in background and redirect to index
     */
    exec("php jobHandler.php " . escapeshellarg(serialize($_POST)) . " > /dev/null &");

}

header("Location: ./index.php");

?>