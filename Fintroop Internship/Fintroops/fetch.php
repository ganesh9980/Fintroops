<?php
    $conn=mysqli_connect('localhost','root','','fintroops');
    $query="SELECT * FROM 'id_card'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    {
        echo " ".$row['id']." ".$row['name']." "$row["name"]." ".$row["phoneno"]." ".$row["address"]." ".row["enroll"]."<br>";
    }
?>