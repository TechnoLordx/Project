<?php

/* "$connection" needed for the connection of database, otherwise we can't make a connection to there*/
function setComments($connection) 
{
    if(isset($_POST['saveComment'])){
      $user =  $_POST['username'];
      $date =  $_POST['date'];
      $message =  $_POST['message'];

      $sql = "INSERT INTO comment (username, date, message) VALUES ('$user','$date','$message')";
      $result = mysqli_query($connection, $sql);
    }
}

function getComments($connection)
{
    $sql = "SELECT * FROM comment";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){ /* 3. all row is here from database and row is now an array[] */
        echo "<div class='comment__box'>";
            echo "<p>";
                echo $row['username']."<br>";
            echo "</p>";
            echo $row['date']."<br>";
            echo nl2br($row['message']); /* it'll show the line breaks nl2br() */ 
        echo "
        <form method='POST' action='edit.php'>
            <input type='hidden' name='id' value='".$row['id']."'>
            <input type='hidden' name='username' value='".$row['username']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
        </from>
        </div>";
    }
        
}

function editComments($connection) 
{
    if(isset($_POST['saveComment'])){
      $id = $_POST['id'];
      $user =  $_POST['username'];
      $date =  $_POST['date'];
      $message =  $_POST['message'];

      $sql = "UPDATE comment SET message='$message' WHERE id='$id'";
      $result = mysqli_query($connection, $sql);
      header("Location: forum.php");

    }elseif(isset($_POST['back'])){
        header("Location: forum.php");
    }
}

?>