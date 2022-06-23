<?php

session_start();
unset($_SESSION['connect']);
header('Location: /collab-plateform');