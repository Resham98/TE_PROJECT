<?php 
    session_start();
?>

<html>
<head>
    <title>
        The Food Doofs
    </title>
    
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <link rel="text/ stylesheet" href="css/loginn.css">
    <link rel="icon" href="images/icon.png">
<!--    <link rel="icon" href="img/icon1.jpg" type="image/icon" sizes="15x15">-->
<style>
body{
    background-image:url('images/bgg4.jpg');
    height:100vh;
    background-size:cover;
    background-position:center;
}
    h2{
    color:white;
    }
    body{
        background-color: black;
        background-repeat: no-repeat;
        background-size: cover;
    }
    textarea{
        background: #f2f2f2;
    }
    .form {
        top:-41px;
        right:320px;
        background: transparent;
    }
    .form input {
        margin: 14px 0px 12px;
    }
    .form button{
        background:#FDA30E;
        border-radius:25px;
        margin-top:12px;
    }
    .form .message{
        margin:15px 0 0;
        color:white;
        font-size: 12px;
    }
    .form .message a{
        color:#FDA30E;
        text-decoration: none;
    }
    .form button:hover,.form button:active{
        background:gray;
    }
    body{
    background-image:url('images/bgg4.jpg');
    height:100vh;
    background-size:cover;
    background-position:center;
}
    .login-page{
    width:360px;
    padding:0% 0 0;
    margin:auto;
}
</style>
</head>
<body>
    
    <div class="login-page">
        <div class="form">
           
                <form method="post" action="reg.php" class="register-form"> 
                     <h2>Register</h2>
            
                    <input type="text"  name="name" placeholder="Name" required/>
                    <input type="text"  name="username" placeholder="Username" required/>
                    <input type="password"  name="password" placeholder="Password" required/>
<!--                    <input type="cpassword"  name="cpassword" placeholder="Confirm Password"/>-->
<!--                    <input type="text"  name="address" placeholder="Address"/>-->
<!--                    <textarea rows="6" cols="35" name="address" placeholder="Address"></textarea>-->
                    <input type="phone"  name="phone" placeholder="Phone number" required/>
                
                    <button type="submit" name="register">Create</button>
                    <p class="message">Already Registered? <a href="#">Login</a></p>
    
                </form>
                <form  class="login-form" action="login.php" method="post">   
                    <h2>Login</h2>
                    <input type="text" name="username" placeholder="User name" required/>
                    <input type="password" name="password" placeholder="password" required/>
                
                    <button type="submit" name="login">Login</button>
                    <p class="message">Not Registered? <a href="#">Register</a></p>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js' rel="text/javascript">
                    </script>
                    <script>
                        $('.message a').click(function(){
                            $('form').animate({height:"toggle", opacity:"toggle"},"slow");
                        });
                    </script>
               </form>    
            <p class="message">Start Finding Restaurant <a href="home.php">Go Back!!</a></p>
        </div>
    </div>
</body>
</html>