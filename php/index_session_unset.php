<?php

session_unset();
session_destroy();
session_start();

echo "Session unset/set";
?>
