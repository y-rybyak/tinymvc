<?php
session_start();
session_destroy();
header('Location: /application/view/view_login.php', true, 303);