<?php
//on form logout send
session_start();
session_unset();
session_destroy();
header("Location: index.php");