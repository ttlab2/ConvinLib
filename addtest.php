<?php
  $msg = "";
  // if upload button is pressed
  if (isset($_POST['upload'])) {
     // the path to store the uploaded image
     $target = "images/".basename($_FILES['image']['name']);
     //connect to the database
     $db = mysqli_connect("localhost","root","","fyp");
     //get all the sumbitted data from the form
    $image = $_FILES['image']['name'];
    $id = $_POST['id'];
    $bname = $_POST['bname'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];
    $sql = "INSERT INTO book (id, image, bname, author, publisher, year) VALUES ('$id','$image','$bname','$author','$publisher','$year')";
    mysqli_query($db,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
      $msg = "Image uploaded successfully";
    } else{
      $msg = "There was a problem uploading image";
    }
  }

 ?>

<html>
<body>
<form method="post" action="addtest.php" enctype="multipart/form-data">
 <input type="hidden" name="size" value="10000000">
 <input type="text" name="id" placeholder="bookid">
  <input type="file" name="image">
  <input type="text" name="bname" placeholder="bookname">
  <input type="text" name="author" placeholder="author">
  <input type="text" name="publisher" placeholder="publisher">
  <input type="text" name="year" placeholder="year">
   <input type="submit" name="upload" value="Uplaod">
</form>
</body>
</html>
