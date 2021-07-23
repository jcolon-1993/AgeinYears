<?php
// My birthday
$birthday = "1993-09-22";
// Call function and prints it out
echo age($birthday);
// Function calculates age
function age($age)
{
  /*
      list assigns all varibales in one operation. The explode method, splits
      a string into an array whenver theres is a -.
  */
  list($year, $month, $day) = explode("-", $age);
  /*
    Gets the difference of the current date and the parameter dates for all three
    Variables
  */
  $year_diff = date("Y") - $year;
  $month_diff = date("m") - $month;
  $day_diff = date("d") - $day;
  // If the difference of the resulting day and month is less than 0, then decrement
  // the difference of the year.
  if ($day_diff < 0 || $month_diff < 0)
  {
    $year_diff--;
  }
  // Return the difference of the year (Date of birth)
  return $year_diff;
}
?>
