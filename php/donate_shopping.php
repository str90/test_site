<?php
if(session_status() == PHP_SESSION_NONE) session_start();

//weapons block

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

if(isset($_POST['wpn_crossbow_quantity'])) {
  if (!filter_var((int)$_POST['wpn_crossbow_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_crossbow_quantity'] > 0) {
    $_SESSION['wpn_crossbow'] = True;
    $_SESSION['wpn_crossbow_quantity'] = (int)$_POST['wpn_crossbow_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_crossbow_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_csmg_quantity'])) {
  if (!filter_var((int)$_POST['wpn_csmg_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_csmg_quantity'] > 0) {
    $_SESSION['wpn_csmg'] = True;
    $_SESSION['wpn_csmg_quantity'] = (int)$_POST['wpn_csmg_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_csmg_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_db_quantity'])) {
  if (!filter_var((int)$_POST['wpn_db_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_db_quantity'] > 0) {
    $_SESSION['wpn_db'] = True;
    $_SESSION['wpn_db_quantity'] = (int)$_POST['wpn_db_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_db_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_eoka_quantity'])) {
  if (!filter_var((int)$_POST['wpn_eoka_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_eoka_quantity'] > 0) {
    $_SESSION['wpn_eoka'] = True;
    $_SESSION['wpn_eoka_quantity'] = (int)$_POST['wpn_eoka_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_eoka_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_legolas_quantity'])) {
  if (!filter_var((int)$_POST['wpn_legolas_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_legolas_quantity'] > 0) {
    $_SESSION['wpn_legolas'] = True;
    $_SESSION['wpn_legolas_quantity'] = (int)$_POST['wpn_legolas_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_legolas_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_pump_shotgun_quantity'])) {
  if (!filter_var((int)$_POST['wpn_lr-300_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_pump_shotgun_quantity'] > 0) {
    $_SESSION['wpn_pump_shotgun'] = True;
    $_SESSION['wpn_pump_shotgun_quantity'] = (int)$_POST['wpn_pump_shotgun_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_pump_shotgun_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_checkist_quantity'])) {
  if (!filter_var((int)$_POST['wpn_checkist_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_checkist_quantity'] > 0) {
    $_SESSION['wpn_checkist'] = True;
    $_SESSION['wpn_checkist_quantity'] = (int)$_POST['wpn_checkist_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_checkist_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_pistol_quantity'])) {
  if (!filter_var((int)$_POST['wpn_pistol_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_pistol_quantity'] > 0) {
    $_SESSION['wpn_pistol'] = True;
    $_SESSION['wpn_pistol_quantity'] = (int)$_POST['wpn_pistol_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_pistol_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_dmr_quantity'])) {
  if (!filter_var((int)$_POST['wpn_dmr_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_dmr_quantity'] > 0) {
    $_SESSION['wpn_dmr'] = True;
    $_SESSION['wpn_dmr_quantity'] = (int)$_POST['wpn_dmr_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_dmr_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_thompson_quantity'])) {
  if (!filter_var((int)$_POST['wpn_thompson_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_thompson_quantity'] > 0) {
    $_SESSION['wpn_thompson'] = True;
    $_SESSION['wpn_thompson_quantity'] = (int)$_POST['wpn_thompson_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_thompson_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_waterpipe_quantity'])) {
  if (!filter_var((int)$_POST['wpn_waterpipe_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_waterpipe_quantity'] > 0) {
    $_SESSION['wpn_waterpipe'] = True;
    $_SESSION['wpn_waterpipe_quantity'] = (int)$_POST['wpn_waterpipe_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_waterpipe_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_holo_quantity'])) {
  if (!filter_var((int)$_POST['wpn_holo_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_holo_quantity'] > 0) {
    $_SESSION['wpn_holo'] = True;
    $_SESSION['wpn_holo_quantity'] = (int)$_POST['wpn_holo_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_holo_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_4x_quantity'])) {
  if (!filter_var((int)$_POST['wpn_4x_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_4x_quantity'] > 0) {
    $_SESSION['wpn_4x'] = True;
    $_SESSION['wpn_4x_quantity'] = (int)$_POST['wpn_4x_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_4x_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_boost_quantity'])) {
  if (!filter_var((int)$_POST['wpn_boost_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_boost_quantity'] > 0) {
    $_SESSION['wpn_boost'] = True;
    $_SESSION['wpn_boost_quantity'] = (int)$_POST['wpn_boost_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_boost_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_brake_quantity'])) {
  if (!filter_var((int)$_POST['wpn_brake_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_brake_quantity'] > 0) {
    $_SESSION['wpn_brake'] = True;
    $_SESSION['wpn_brake_quantity'] = (int)$_POST['wpn_brake_quantity'];
    print_r($_SESSION);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_brake_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

//end weapons block

//session_unset();
//session_destroy();
?>
