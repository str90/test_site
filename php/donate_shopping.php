<?php

session_unset();
session_destroy();
session_start();

class item_pack {
  public $item;
  public $item_amount;

  function __construct($in_item, $in_item_amount) {
    $this->item = $in_item;
    $this->item_amount = $in_item_amount;
  }
}
//include "classes/trade_object.php";

//weapons block

if(isset($_POST['wpn_ak47_quantity'])) {
  if (!filter_var((int)$_POST['wpn_ak47_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_ak47_quantity'] > 0) {
    $wpn_ak47_basket = new item_pack("wpn_ak47", (int)$_POST['wpn_ak47_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_ak47_basket;
    //var_dump($_SESSION['basket_item_objects'][0]->item;);
    var_dump($_SESSION['basket_item_objects'][0]);
    //printf("В корзину добавлено %d АК-47", $_POST['wpn_ak47_quantity']);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_ak47_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_bolt_quantity'])) {
  if (!filter_var((int)$_POST['wpn_bolt_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_bolt_quantity'] > 0) {
    $wpn_bolt_basket = new item_pack("wpn_bolt", (int)$_POST['wpn_bolt_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_bolt_basket;
    var_dump($_SESSION['basket_item_objects'][1]);
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_bolt_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_crossbow_quantity'])) {
  if (!filter_var((int)$_POST['wpn_crossbow_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_crossbow_quantity'] > 0) {
    $wpn_crossbow_basket = new item_pack("wpn_crossbow", (int)$_POST['wpn_crossbow_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_crossbow_basket;
    echo $_POST['wpn_crossbow_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_crossbow_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_csmg_quantity'])) {
  if (!filter_var((int)$_POST['wpn_csmg_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_csmg_quantity'] > 0) {
    $wpn_csmg_basket = new item_pack("wpn_csmg", (int)$_POST['wpn_csmg_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_csmg_basket;
    echo $_POST['wpn_csmg_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_csmg_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_db_quantity'])) {
  if (!filter_var((int)$_POST['wpn_db_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_db_quantity'] > 0) {
    $wpn_db_basket = new item_pack("wpn_db", (int)$_POST['wpn_db_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_db_basket;
    echo $_POST['wpn_db_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_db_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_eoka_quantity'])) {
  if (!filter_var((int)$_POST['wpn_eoka_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_eoka_quantity'] > 0) {
    $wpn_eoka_basket = new item_pack("wpn_eoka", (int)$_POST['wpn_eoka_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_eoka_basket;
    echo $_POST['wpn_eoka_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_eoka_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_legolas_quantity'])) {
  if (!filter_var((int)$_POST['wpn_legolas_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_legolas_quantity'] > 0) {
    $wpn_legolas_basket = new item_pack("wpn_legolas", (int)$_POST['wpn_legolas_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_legolas_basket;
    echo $_POST['wpn_legolas_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_legolas_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_pump_shotgun_quantity'])) {
  if (!filter_var((int)$_POST['wpn_lr-300_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_pump_shotgun_quantity'] > 0) {
    $wpn_pump_shotgun_basket = new item_pack("wpn_pump_shotgun", (int)$_POST['wpn_pump_shotgun_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_pump_shotgun_basket;
    echo $_POST['wpn_pump_shotgun_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_pump_shotgun_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_checkist_quantity'])) {
  if (!filter_var((int)$_POST['wpn_checkist_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_checkist_quantity'] > 0) {
    $wpn_checkist_basket = new item_pack("wpn_checkist", (int)$_POST['wpn_checkist_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_checkist_basket;
    echo $_POST['wpn_checkist_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_checkist_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_pistol_quantity'])) {
  if (!filter_var((int)$_POST['wpn_pistol_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_pistol_quantity'] > 0) {
    $wpn_pistol_basket = new item_pack("wpn_pistol", (int)$_POST['wpn_pistol_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_pistol_basket;
    echo $_POST['wpn_pistol_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_pistol_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_dmr_quantity'])) {
  if (!filter_var((int)$_POST['wpn_dmr_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_dmr_quantity'] > 0) {
    $wpn_dmr_basket = new item_pack("wpn_dmr", (int)$_POST['wpn_dmr_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_dmr_basket;
    echo $_POST['wpn_dmr_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_dmr_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_thompson_quantity'])) {
  if (!filter_var((int)$_POST['wpn_thompson_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_thompson_quantity'] > 0) {
    $wpn_thompson_basket = new item_pack("wpn_thompson", (int)$_POST['wpn_thompson_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_thompson_basket;
    echo $_POST['wpn_thompson_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_thompson_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_waterpipe_quantity'])) {
  if (!filter_var((int)$_POST['wpn_waterpipe_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_waterpipe_quantity'] > 0) {
    $wpn_waterpipe_basket = new item_pack("wpn_waterpipe", (int)$_POST['wpn_waterpipe_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_waterpipe_basket;
    echo $_POST['wpn_waterpipe_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_waterpipe_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_holo_quantity'])) {
  if (!filter_var((int)$_POST['wpn_holo_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_holo_quantity'] > 0) {
    $wpn_holo_basket = new item_pack("wpn_holo", (int)$_POST['wpn_holo_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_holo_basket;
    echo $_POST['wpn_holo_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_holo_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_4x_quantity'])) {
  if (!filter_var((int)$_POST['wpn_4x_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_4x_quantity'] > 0) {
    $wpn_4x_basket = new item_pack("wpn_4x", (int)$_POST['wpn_4x_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_4x_basket;
    echo $_POST['wpn_4x_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_4x_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_boost_quantity'])) {
  if (!filter_var((int)$_POST['wpn_boost_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_boost_quantity'] > 0) {
    $wpn_boost_basket = new item_pack("wpn_boost", (int)$_POST['wpn_boost_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_boost_basket;
    echo $_POST['wpn_boost_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_boost_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

if(isset($_POST['wpn_brake_quantity'])) {
  if (!filter_var((int)$_POST['wpn_brake_quantity'], FILTER_VALIDATE_INT) === false) if((int)$_POST['wpn_brake_quantity'] > 0) {
    $wpn_brake_basket = new item_pack("wpn_brake", (int)$_POST['wpn_brake_quantity']);
    $_SESSION['basket_item_objects'][] = $wpn_brake_basket;
    echo $_POST['wpn_brake_quantity'];
  } else echo "Введите число больше нуля";
  elseif((int)$_POST['wpn_brake_quantity'] === 0) echo "Введите число больше нуля";
  else echo "Введите число";
}

//end weapons block
?>
