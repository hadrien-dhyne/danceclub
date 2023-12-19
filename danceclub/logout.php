<?php 
require 'app/app.php';

session_destroy();
header("Location: index.php?logout");