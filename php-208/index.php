<?php
//create function with an exception
function checkNum($number) {
    // throw new Exception("Value must be 1 or below");
  if($number > 1) {
    //   echo $number;
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

try {
    //trigger exception
    checkNum(2);
}
catch(Exception $e) {
echo 'Exception: ' .$e->getMessage();
}
?>
