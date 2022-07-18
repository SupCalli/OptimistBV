<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //https://www.youtube.com/watch?v=qm4Eih_2p-M&t=325s
        $name = $_POST['txtname'];
        $email = $_POST['txtemail'];
        $number = $_POST['txtnum'];
        $message = $_POST['txtmessage'];


        if (!empty($name) && !empty($email) && !empty($number) && !empty($message))
        {
            $host = "localhost";
            $dbUsername ="root";
            $dbPassword = "";
            $dbname ="optimist_db";

            
            //create connection
            $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
           
            if(mysqli_connect_error()){
                die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error()); 
                
            }
            else{
                $SELECT = "SELECT email FROM subscribers_t WHERE email = ? LIMIT 1";
                $INSERT = "INSERT INTO subscribers_t (username, email, phone, messages) values (?, ?, ?, ?)";
                
                //prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s",$email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;


                if ($rnum == 0) 
                {
                    $stmt->close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssis", $name, $email, $number, $message);
                    $stmt->execute();
                    // echo"New record inserted successfully";
                    header("location: index.html");
                }
                else
                {
                    echo"Someone already register using this email";
                }
                $stmt->close();
                $conn->close();
            }
        }
        else
        {
            echo"All field are required";
            die();
        }


?>
</body>
</html>