<?php
  $number = 12345 * 67890;
  echo substr($number, 3, 1);

   //echo "This is line " . __LINE__ . " of file " . __FILE__;
   echo "<br>";
   function longdate($timestamp)
  {
  	
    return date("l F jS Y", $timestamp);
  }
  
   echo longdate(time());
    echo "<br>";
  
echo longdate(time() - 17 * 24 * 60 * 60);
 echo "<br>";

function greet ($name)
{
       echo "Hello $name";
}

greet ("Manpreet Singh");
 echo "<br>";

function test()
  {
    static $count = 0;
    echo $count;
    $count++;
}
  
echo test();
echo test();
echo test();
echo test();


  ?>