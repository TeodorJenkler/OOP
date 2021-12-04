<?php

class Utility {
public static function randomizer(){
  return rand();
}
public static function tarning(){
return rand(1,6);
}
public static function tarning2(){
  return (rand()%6)+1;
}
public static function look_for_p($input){
  return preg_grep("/p/i", $input);
}
}

echo Utility:randomizer();
echo "<br>";
echo Utility:tarning();
echo "<br>";
echo Utility:tarning2();
echo "<br>";
print_r(Utility::look_for_p([
  "Pajs"
  "majs"
  "Bajs"
  "pelle"
  "Melle"]));



?>
