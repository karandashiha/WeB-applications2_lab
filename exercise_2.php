<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="content-type" content="text/html; charset= UTF-8">
   <title>Завдання №2. Виконала: Решетник Катерина</title>
</head>

<body>
   <?php
   function print_form($name, $surname, $email, $zip_code, $favorite_subject)
   {
   ?>
      <form action="exercise_2.php" method="post">
         <table cellspacing="2" cellpadding="2" border="1">
            <tr>
               <td>Ім'я</td>
               <td><input name="f_name" type="text" value="<?php echo $name ?>">
               </td>
            </tr>
            <tr>
               <td>Прізвище<b>*</b></td>
               <td><input name="surname" type="text" value="<?php print $surname ?>"></td>
            </tr>
            <tr>
               <td>Email адреса<b>*</b></td>
               <td><input name="email" type="text" value="<?php print $email ?>"></td>
            </tr>
            <tr>
               <td>Поштовий індекс<b>*</b></td>
               <td><input name="zip_code" type="text" value="<?php print $zip_code ?>"></td>
            </tr>
            <tr>
               <td>Улюблений предмет</td>
               <td><input name="favorite_subject" type="text" value="<?php print $favorite_subject ?>"></td>
            </tr>
         </table>
         <input name="submit" type="submit" value="Надіслати">
         <input name="reset" type="reset" value="Відмінити">
      </form>
   <?php
   }
   function check_form($name, $surname, $email, $zip_code, $favorite_subject)
   {
      if (!$surname || !$email || !$zip_code) : echo "<h3>Помилка у заповнені форми</h3";
         if (!$surname) {
            echo "<h3>Ви не заповнеои поле <b>Прізвище</b></h3>";
         }
         if (!$email) {
            echo "<h3>Ви не заповнеои поле <b>Email адреса</b></h3>";
         }
         if (!$zip_code) {
            echo "<h3>Ви не заповнеои поле <b>Поштовий індекс</b></h3>";
         }
         print_form($name, $surname, $email, $zip_code, $favorite_subject);
      else : confirm_form($name, $surname, $email, $zip_code, $favorite_subject);
      endif;
   }
   function confirm_form($name, $surname, $email, $zip_code, $favorite_subject)
   {
   ?>
      <h2>Дякуємо! Наступна інформація була успішно нвдіслана</h2>
      <b>Контактна інформація</b>
   <?php
      echo "<br>$name $surname $email<br>Поштовий індекс:\n $zip_code
      <br>Улюблений предмет: $favorite_subject \n";
   }
   $submit = $_POST['submit'];
   $name = $_POST['name'];
   $surname = $_POST['surname'];
   $email = $_POST['email'];
   $zip_code = $_POST['zip_code'];
   $favorite_subject = $_POST['favorite_subject'];
   if (!$submit) :
   ?>
      <h3>Будь-ласка,введіть інформацію про себе</h3>
      <p>Поля з <b>*</b> обов'язкові для заповнення</p>
   <?php
      print_form("", "", "", "", "");
   else : check_form($name, $surname, $email, $zip_code, $favorite_subject);
   endif;
   ?>
</body>

</html>