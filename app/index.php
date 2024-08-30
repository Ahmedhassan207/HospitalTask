<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alshafa Hospital </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php $logo = 'https://img.icons8.com/?size=100&id=43219&format=png&color=000000' ?>
    <div class="main">
        <div class="logo">
            <img src="<?php echo $logo; ?>"  alt="">
            <p>مستشفى الشفاء  </p>
        </div> 
        <div class="book">
            <p>Welcome in Alshafa Hospital </p>
            <p>You can <i>Book</i> Now online </p>  
            <form action="" method="post">
                <input type="text" placeholder=" Enter Name " name="name">
                <input type="email" placeholder="Enter Email " name="email">
                <input type="date" placeholder="" name="date">
                <input type="submit" value="Book Now" name="send">

            </form> 

            <?php
                $pName = $_POST['name'];
                $pEmail = $_POST['email'];
                $pDate = $_POST['date'];
                $pSend = $_POST['send'];

                $host = "localhost";
                $user = 'root';
                $password = '';
                $dbname = 'Hospital';
                $conn = mysqli_connect($host,$user,$password,$dbname);

                
                
                if($pSend){
                    
                    $query = "INSERT INTO patients(name,email,date) VALUE('$pName','$pEmail','$pDate')";
                    $result = mysqli_query($conn,$query);
                    echo 'Done';

                }


            ?>
        </div>    
    </div>
</body>
</html>