<!DOCTYPE html>
<!-- pdsexample.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
    <!-- Статик болон динамик агуулгын ялгаа -->
    <p>Энэ бол статик агуулга.</p>
    
    <?php echo "PHP скриптээр, програмын кодоор үүсгэсэн динамик агуулга."; ?>
	<?php echo "pds milab edu"; ?>
    <p>Вэб серверийн цаг: 
       <span><?php 
              // Системийн цагийг HTTP гаралтад бичих
              echo "Өнөөдөр бол " . date("Y/m/d");
             ?></span>
    <p>
  </body>
</html>