<?php
function return_true(){
  return true;
}
function return_false(){
  return false;
}
echo return_true();
echo "<br>"; 
echo return_false();
echo "<br><br>"; 

if(return_true()) {
  echo "true baby! <br>";
}
if(!return_true()) {
  echo "not true baby! <br>";
}
if(return_false()) {
  echo "false baby! <br>";
}
if(!return_false()) {
  echo "not false baby! <br>";
}