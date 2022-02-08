<?php

// Variables superglobles

// Variables de servidor

echo '<h1>';
echo $_SERVER['SERVER_SELF'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //version que utilizas
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT']; //navegador que utilizas
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR']; //IP del cliente
echo '</h1>';