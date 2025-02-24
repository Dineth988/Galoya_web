
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #containerDiv{
            
            place-items: center;
            
            text-align: center;
            margin-top: 200px;
            margin-left: 610px;
            padding-top: 20px;
            border: 2px solid black;
            border-color: rgb(210, 204, 204);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1); /* Transparent white */
            backdrop-filter: blur(20px);
        }
        body{
            background-image: url(https://th.bing.com/th/id/R.fe26d3c4a72e919e161b497568bd7696?rik=NXsyTNxZ7Hynag&pid=ImgRaw&r=0);
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
            height: 70vh; 
            margin: 0; 
        }
        #logInBtn{
            background: rgba(50,19,156,255);
            color: aliceblue;
            border: 1px solid;
            border-color: rgba(50,19,156,255);
        }
        #logInBtn:hover{
            background-color: rgba(35, 10, 140, 255);
        }
     
    </style>
</head>
<body>
    <?php   
        session_start();
        include ("db_connect.php");   

        if (isset($_POST["loginBtn"])) {
            $loginEmail = trim($_POST['loginEmail']);
            $loginPassword = trim($_POST['loginPassword']);

            $sql = "SELECT id, username, password FROM users WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $loginEmail);
            $stmt->execute();
            $stmt->store_result();


            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $password);
                $stmt->fetch();

                // Verify password
                if ($loginPassword == $password) {
                    $_SESSION['user_id'] = $id;
                    $_SESSION['username'] = $username;
                    header("Location: dashboard.php");
                    exit();
                } else {
                   
                    $error = "Invalid password.";
                    echo "<script>alert('$error');</script>";
                }
            } else {
                
                $error = "Invalid email.";
                echo "<script>alert('$error');</script>";
            }

            $stmt->close();
        }
        $conn->close();

    ?>
    <form action="login.php" method="post">
        <div id="containerDiv" style="width: 300px; height: 300px ; ">
            <div>
                <h2 id="loginTxt" style="color: azure;">LOGIN</h2>
                <div id="textBoxDiv" style="display: flex; flex-direction: column;">
                     <input id="loginEmail" name="loginEmail" type="text" style="width: 200px; height:30px; text-align: center; margin-bottom: 20px; border-radius: 10px; border: 1px ;" placeholder="Username">
                     <input id="loginPassword" name="loginPassword" type="text" style="width: 200px; height:30px; text-align: center; margin-bottom: 40px; border-radius: 10px; border: 1px;" placeholder="Password">
                </div>
                    
                     <button name="loginBtn" type="submit" id="logInBtn" style="width: 200px; height: 30px; border-radius: 20px;">Log in</button>
                     <div style="display: flex;">
                        <h5 style="margin-left: 8px;">No account with us?</h5>
                        <a href="/Final%20Poject%20Web/GaloyaWeb/Galoya_web/register.php" style="font-size: small; margin-top: 23px; margin-left: 5px; text-decoration: underline; color: rgb(186, 186, 190); cursor: pointer;">Register here</a>
                     </div>
            </div>
           
        </div>    

    </form>
   
    
</body>
</html>