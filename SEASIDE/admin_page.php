<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="margin: 50px";>
    <h1>List of Employees</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
            <tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "sea_side";

            $connection = new mysqli($servername, $username, $password, $database);

            if($connection->connect_error){
                die("connection failed: " .$connection->connect_error);
            }
            $sql = "SELECT * FROM users";
            $result = $connection->query($sql);

            if (!$result){
                die("Invalid query:" . $connection->error);
            }
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["name"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["role"]  . "</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='update'>Update</a>
                            <a class='btn btn-danger btn-sm' href='Delete'>Delete</a>
                        </td>
                      </tr>";
            }
            
            ?>

          
        <tbody>
    </table>
 
</body>
</html>