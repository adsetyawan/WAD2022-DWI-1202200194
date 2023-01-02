<?php

session_start();
require 'admin/config/config.php';

setcookie('id',"", time() - (60 * 60 * 24 * 30), '/');
setcookie('key',"", time() - (60 * 60 * 24 * 30), '/');
session_destroy();
header('Location: ' . URL);
