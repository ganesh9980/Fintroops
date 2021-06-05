<?php
$name=$_POST['name'];
$phoneno=$_POST['phoneno'];
$address=$_POST['address'];
$enroll=$_POST['enroll'];
$image=$_POST['image'];
if(!empty($name) || !empty($phoneno) || !empty($address) || !empty($enroll) || !empty($image))
{
    $conn=new mysqli('localhost','root','','fintroops');
    if($conn->connect_error)
    {
        die('Connection Failed: '.$conn->connect_error);
    }
    else{
        $INSERT=$conn->prepare("INSERT into id_card(name,phoneno,address,enroll,image) values(?,?,?,?,?)");
        $INSERT->bind_param("sissb",$name,$phoneno,$address,$enroll,$image);
        $INSERT->execute();
        echo "Thanks for Submitting the form. Your data Uploaded Successfully";
        $INSERT->close();
        $conn->close();
    }
}
else{
    echo "All fields are required";
    die();
}
?>