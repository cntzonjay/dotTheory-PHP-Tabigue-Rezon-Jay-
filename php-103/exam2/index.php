<?php
/*
* This function computes BMI and identify if it's underweight, normal, overweight or obese
* @acces public
* @param float $heightInches,$weightPounds
* @return string $bmi
*/

function calculate_bmi_english($heightInches,$weightPounds){
 
   $index =0; // this variable will store the computed bmi
   if($heightInches !=0 && $weightPounds !=0)
       $index = round($weightPounds/($heightInches*$heightInches)* 703,2); //bmi computation
    
    //this block of code identify if the computed bmi falls on underweight, normal, overweight or obese category
   $bmi="";
   if ($index < 18.5) {
       $bmi="underweight - BMI : " . $index;
   } else if ($index < 25) {
       $bmi="normal - BMI : ". $index;
   } else if ($index < 30) {
       $bmi="overweight - BMI : " . $index;
   } else {
       $bmi="obese - BMI : " .$index;
   }
   echo $bmi; // output computed bmi with category.
}
calculate_bmi_english(69,150); // calling calculate_bmi_english function with actual parameters
?>
