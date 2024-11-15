<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact pages</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="topic-contact">contact</h1>
        <form action="" method="post" class="form-contact">
            <input type="text" placeholder="Enter your Fullname" name="fullname">
            <input type="email" placeholder="Enter your Email" name="emailName">
            <textarea name="message" placeholder="message..."></textarea>
            <button type="submit" name="nameButton">send</button>
        </form>
    </div>
</body>
</html>

<?php  
    $connect = mysqli_connect("localhost", "root", "", "data");

    if(isset($_POST["nameButton"])) {
        $fullname = $_POST["fullname"];
        $email = $_POST["emailName"];
        $textareas = $_POST["message"];

        $qury = "INSERT INTO contact_user VALUES('', '$fullname', '$email', '$textareas')";

        mysqli_query($connect, $qury);
    }
?>