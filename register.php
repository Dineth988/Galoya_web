<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html, body {
             overflow: hidden;
       }
       body{
       
        background-size: cover;
       }

        #imageDiv{
            
            background-image: url(https://th.bing.com/th/id/R.fe26d3c4a72e919e161b497568bd7696?rik=NXsyTNxZ7Hynag&pid=ImgRaw&r=0);
            background-size: cover;
            width: 800px;
            height: 720px;     
            border-radius: 20px;        
            
        }
        #formDiv{
            
            background: white;
            width: 400px;
            position: relative;
            border-radius: 20px;
            margin-left: 90px;
            margin-top:70px;
            padding: 30px;
           
            background: rgba(255, 255, 255, 0.1); /* Transparent white */
            backdrop-filter: blur(20px);
           
        }
        #signUpBtn{
            background: rgba(50,19,156,255);
            color: azure;
            border: 1px;
        }
        #signUpBtn:hover{
            background-color: rgba(35, 10, 140, 255);
        }
       
    </style>
</head>
<body>
    <?php
        session_start();
        include("db_connect.php");
        if(isset($_POST["signUpBtn"])){
            $email = $_POST['emailTxt'];
            $username = $_POST['usernameTxt'];
            $contactNumber = $_POST['contactNumberTxt'];
            $password = $_POST['passwordTxt'];


            $sql = "INSERT INTO users (username, email, password, `contact number`) VALUES ('$username', '$email', '$password', '$contactNumber')";
            if ($conn->query($sql)) {
                header("Location: dashboard.php"); // Redirect to login
                exit();
            } else {
                $error = "Error: " . $conn->error;
            }
        }
    ?>
    <div style="display: flex; flex-direction: row">
      <div id="imageDiv">

      </div> 
        <div>
           <form action="register.php" method="post">
                <div id="formDiv" style="display: flex; flex-direction: column;">
                    <div>
                        <p style="font-size: large;">Welcome to Galoya products</p>
                        <h1 style="font-size: 60px; margin-top: 6px;">Sign up</h1>
                    </div>
                    <P>Email</P>
                    <input type="text" name="emailTxt" style="border-radius: 5px; width: 400px; height: 30px; border: 2px solid gray;">
                    <div style="display: flex; width: 400px;">
                        <div>
                            <p>Username</p>
                            <input type="text" name="usernameTxt" style="width: 187px; height: 30px; border-radius: 5px; margin-right: 20px; border: 2px solid gray;">
                        </div>
                        <div>
                            <p>Contact number</p>
                            <input type="text" name="contactNumberTxt" style="width: 187px; height: 30px; border-radius: 5px; border: 2px solid gray;">
                        </div>
                        
                    </div>
                    <p>Password</p>
                    <input type="text" name="passwordTxt" style="border-radius: 5px; width: 400px; height: 30px; border: 2px solid gray;">
                    <button name="signUpBtn" style="border-radius: 10px; width: 410px; height: 35px; margin-top: 60px;" id="signUpBtn">Sign up</button>
                </div>
           </form> 
        </div>
    </div>
    
</body>
</html>