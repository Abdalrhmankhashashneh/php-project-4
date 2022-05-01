<?php
session_start();
session_unset();
echo '<script language="javascript" > location.href = "../index.php" </script>';
