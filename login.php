<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row && password_verify($password, $row['password'])) {
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['full_name'] = $row['full_name'];
        header("Location: home.php");
    } else {
        echo "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<style>
    h2{
        text-align: center;
        display: block;
    }
    .outer{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        margin-top: 130px;
        display: flex;
        align-items: center;
        justify-content: center;
        
       
    }
    form{
        
        border-radius: 15px;
        background-color: lightblue;
        padding: 20px;
        width: 300px;


    }
    input{
        display: block;
        margin-left: auto;
        margin-right: auto;
       width: 70%;
        margin-block: 5px;
        border-radius: 5px;
        border:  0px ;
        padding: 10px;
    }
    button{
        margin-top: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto;
       width: 80%;
       border:  0px ;
       padding: 10px;
        border-radius: 5px;
        font-weight: 800;
       
      background-color:rgb(78, 76, 175);
      color: #fff;
        transition: background-color 2s ease-in-out;
        transition: color 0.5s ease-in-out;
    }
    
    button:hover{
        cursor: pointer;
        background-color:rgb(49, 48, 105);
        color: white;
    }
    h2,p{
        text-align: center;
        display: block;
    }
    a{
       
        font-weight: 800;
    }
</style>
<body>
  
    <div class="outer">
        
    <div class="container">
   
    <form method="POST">
    <h2>Admin Login</h2>

        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="login">Login</button>
        
    <p>Don't have an account? <a href="register.php">Sign Up</a></p>

</form>
    </div>
    </div>
    
</body>
</html>
