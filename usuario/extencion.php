<?php

if (!extension_loaded('sqlsrv')) {
    echo "La extensión sqlsrv no está habilitada";
    exit;
}