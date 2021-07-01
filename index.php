<?php

$host="localhost";
$user="root";
$password="";
$database="s-motor";

$connect=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
	die("cannot".mysqli_connect_errno());
	}
	else{
		echo"can <br>";
	}
	
if(isset($_POST['forward'])){
    $my_query = "select * from 'dirr' WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `dirr`(`forward`, `left`, `stop`, `right`, `backward`) VALUES ('f',0,0,0,0)";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "f";
    }
else{
		
        echo " ERROR <br>";
    }
}

if(isset($_POST['left'])){
    $my_query = "select * from 'dirr' WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `dirr`(`forward`, `left`, `stop`, `right`, `backward`) VALUES (0,'l',0,0,0)";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "l";
    }
else{
		
        echo " ERROR <br>";
    }
}

if(isset($_POST['stop'])){
    $my_query = "select * from 'dirr' WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `dirr`(`forward`, `left`, `stop`, `right`, `backward`) VALUES (0,0,'s',0,0)";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "s";
    }
else{
		
        echo " ERROR <br>";
    }
}

if(isset($_POST['right'])){
    $my_query = "select * from 'dirr' WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `dirr`(`forward`, `left`, `stop`, `right`, `backward`) VALUES (0,0,0,'r',0)";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "r";
    }
else{
		
        echo " ERROR <br>";
    }
}

if(isset($_POST['backward'])){
    $my_query = "select * from 'dirr' WHERE 1 ";
    $result = mysqli_query($connect, $my_query);

    $my_query = "INSERT INTO `dirr`(`forward`, `left`, `stop`, `right`, `backward`) VALUES (0,0,0,0,'b')";
    $result = mysqli_query($connect, $my_query);
	if($result)
    {
        echo "b";
    }
else{
		
        echo " ERROR <br>";
    }
}