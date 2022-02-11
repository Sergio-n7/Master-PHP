<?php

//La variables de sesiones se muestran en todos los archivos que hagas session_start
session_start();

echo $_SESSION['variable_persistente'];