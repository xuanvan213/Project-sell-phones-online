<?php
session_start();
session_unset();
header('location: '. $_SERVER['HTTP_REFERER']);