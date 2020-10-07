<?php
function tentukan_nilai($number)
{
    if($number >= 85){
        return "sangat baik <br>";

    }
    if ($number >= 70 && $number < 85){
        return "baik <br>";
    }
    if ($number >= 60 && $number < 70){
        return "cukup <br>";
    }else{
        return "kurang <br>";
    }
}

//100-85 sangat baik 85-70 baik 70-60 cukup sisanya kurang


//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>