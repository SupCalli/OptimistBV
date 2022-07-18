<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- https://www.youtube.com/watch?v=NqP0-UkIQS4&t=1685s 23:59 -->
    <div class="container my-5">
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="./create.php" role="button"> New Client</a>
        <br> 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Messages</th>
                    <th>Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $servername ="localhost";
                    $username = "root";
                    $password ="";
                    $database ="optimist_db";

                    //create connection
                    $connection = new mysqli($servername,$username,$password,$database);

                    // Check connection
                    if($connection->connect_error){
                         die("Connection failed:" . $connection->connect_error);
                     }

                    // read all row from database table
                    $sql="SELECT * FROM subscribers_t";
                    $result = $connection->query($sql);

                    if(!$result){
                        die("Invalid query: " . $connection->error);
                    }
                    
                    // read data of each row
                    while($row = $result->fetch_assoc()){
                        echo "
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[username]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            <td>$row[messages]</td>
                            <td>$row[created_at]</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='./edit.php?id=$row[id]'>Edit</a>
                                <a class='btn btn-danger btn-sm' href='./delete.php?id=$row[id]'>Delete</a>
                            </td>
                        </tr>
                        ";
                        //12:36
                    }
                ?>

            </tbody>
        </table>
    </div>
</body>
</html>