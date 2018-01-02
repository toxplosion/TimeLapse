<?php

    /*
     * execute php script in background and redirect to index
     */
    exec("php jobHandler.php ". escapeshellarg(serialize($_POST)) ." > /dev/null &");

    header("Location: ./index.php");

?>