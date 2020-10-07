<?php
function ubah_huruf($string){
 for ($x = 0 ; $x < strlen($string) ; $x++){
     $y =  $string[$x] ;
     $y++;

     if ($y == "aa"){
         $y = "a";
     }
     echo $y;
 }
 echo "<br>";
}
// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>