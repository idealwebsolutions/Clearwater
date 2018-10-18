<?php

    // Setup filesystem
    require_once 'include/environment.php';

    // Start bootstrapping
    require APPLICATION.'Bootstrap'.EXT;

    // Dispatch a request and execute it
    Router::Dispatch()->execute();

?>