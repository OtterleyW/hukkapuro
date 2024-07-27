<?php
if($_SERVER["REQUEST_URI"] == "/hieno"){
require("../src/hieno.php");}
else{
  echo("404");
}
