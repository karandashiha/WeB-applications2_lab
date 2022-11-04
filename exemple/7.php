<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset=UTF-8>
   <meta http-equiv="Content-Type" content="text/html">
   <link rel="stylesheet" type="text/css" href="style.css" />
   <title> Виконала: Решетник Катерина</title>
</head>

<body>
   <?
   $var = 5;
   $i = 0;
   while (++$i <= $var) {
      echo ($i);
      echo ('<br>');
   }
   ?>
   <hr>
   <?
   $var = 7;
   $i = 0;
   while (++$i <= $var) {
      echo ($i);
      echo ('<br>');
      if ($i == 3) break;
   }
   ?>
   <hr>
   <?
   $var = 7;
   $i = 0;
   while (++$i <= $var) {
      if ($i == 5) {
         continue;
      }
      echo ($i);
      echo ('<br>');
   }
   ?>
</body>