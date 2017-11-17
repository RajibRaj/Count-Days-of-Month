</php
//returns days in the given month
$year = 2017;
$month = 10;
echo $days = ($month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year %400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31));
