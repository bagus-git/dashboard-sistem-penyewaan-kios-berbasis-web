<?php

session_start();
if (!isset($_SESSION["tb_kepala_upt"])) header("Location: login.php");
