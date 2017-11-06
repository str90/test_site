<?php
if(isset($_POST['ak47_quantity'])) {
  $ak47_quantity = (int)$_POST['ak47_quantity'];
  if($ak47_quantity > 0) echo "$ak47_quantity";
  else if($ak47_quantity < 1) echo var_dump($ak47_quantity);
}
 ?>
