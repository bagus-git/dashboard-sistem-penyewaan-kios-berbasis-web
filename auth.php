<?php

session_start();
if (!isset($_SESSION["tb_admin"])) header("Location: login.php");
