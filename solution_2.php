<?php
date_default_timezone_set('America/Los_Angeles');
$time = date('H:i');
echo "Сейчас $time</br>";
if     ($time >= '06:00' && $time < '09:00')  { echo "Список дел с 6 до 9";   }
elseif ($time >= '09:00' && $time < '12:00')  { echo "Список дел с 9 до 12";  }
elseif ($time >= '12:00' && $time < '15:00')  { echo "Список дел с 12 до 15"; }
elseif ($time >= '15:00' && $time < '18:00')  { echo "Список дел с 15 до 18"; }
elseif ($time >= '18:00' && $time < '21:00')  { echo "Список дел с 18 до 21"; }
elseif ($time >= '21:00' && $time < '24:00')  { echo "Список дел с 21 до 24"; }
elseif ($time >= '00:00' && $time < '06:00')  { echo "Список дел с 0 до 6";   }
else                                          { echo "Что-то пошло не так";   }