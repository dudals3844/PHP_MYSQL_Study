<?php
    $conn = mysqli_connect(
      'localhost',
      'choi',
      '1234',
      'opentutorials');
      
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn,$sql);
    $list = '';
    $description_list = '';
    //<li><a href = "index.php?id=19">MYSQL</a></li>
    while($row = mysqli_fetch_array($result)){
        $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['title']}</li>";
        
    }
    
    
    $article = array(
            'title'=>'Welcome',
            'description'=>'Hello web'
        );
    
    
    
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM topic WHERE id = {$_GET['id']}";//14번중 ?id = {$row['id']}에서 GET으로 받았다.
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
        //print_r($article);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href = "index.php">WEB</a></h1>
        <ol>
            <?=$list?> 
        </ol>
        <a href="create.php">create</a>
        <h2><?=$article['title']?></h2>
        <?=$article['description']?>
    </body>
</html>