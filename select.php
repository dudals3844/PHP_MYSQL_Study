<?php
    $conn = mysqli_connect(
      'localhost',
      'choi',
      '1234',
      'opentutorials');
      
      
      echo "<h1>print multi row</h1>";
      $sql = "SELECT * FROM topic";
      $result = mysqli_query($conn,$sql);
      
      while($row = mysqli_fetch_array($result)){
          echo '<h2>'.$row['title'].'</h2>';
          echo $row['description'];
      }

?>