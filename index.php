<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>file upload in Guitar wars</title>
  </head>
  <body>
    <?php
    //here we will read the file details.
    if(isset($_POST['upload'])){
      echo $_FILES['screenshot']['name'];
      echo "<br>";
      echo $_FILES['screenshot']['type'];
      echo "<br>";
      echo $_FILES['screenshot']['size'];
      echo "<br>";
      echo $_FILES['screenshot']['tmp_name'];
      echo "<br>";
      echo $_FILES['screenshot']['error'];
      echo "<br>";
      $source = $_FILES['screenshot']['tmp_name'];
      $target =dirname(__FILE__).'/images/'.$_FILES['screenshot']['name'];
      echo "target is".$target;
      $parts = pathinfo($target);
      echo $parts['dirname'];
      echo "<br>";
      echo $parts['basename'];
      echo "<br>";
      echo $parts['extension'];
      echo "<br>";
      echo $parts['filename'];
      $newfilename =
      $parts['filename'].time().".".$parts['extension'];
      $target = dirname(__FILE__).'/images/'.$newfilename;
      move_uploaded_file($source,$target);
    }
     ?>
     <div class="wrapper">
       <form enctype="multipart/form-data"class="" action="" method="post">
         <input type="hidden" name="" value="">
         <input type="file" name="screenshot">
         <input type="submit" name="upload" value="upload">
       </form>
     </div>
  </body>
</html>
