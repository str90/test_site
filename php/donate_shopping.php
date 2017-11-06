<?php
if(session_status() == PHP_SESSION_NONE) session_start();

if(isset($_POST['wpn_ak47_quantity'])) {
  if (!filter_var((int)$_POST['wpn_ak47_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_ak47_quantity'] > 0) {
    $_SESSION['wpn_ak47'] = True;
    $_SESSION['wpn_ak47_quantity'] = (int)$_POST['wpn_ak47_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_ak47_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_bolt_quantity'])) {
  if (!filter_var((int)$_POST['wpn_bolt_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_bolt_quantity'] > 0) {
    $_SESSION['wpn_bolt'] = True;
    $_SESSION['wpn_bolt_quantity'] = (int)$_POST['wpn_bolt_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_bolt_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

session_unset();
session_destroy();
?>
