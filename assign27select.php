<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees-FineTech</title>
    <link rel="stylesheet" href="../view/employee.css">
</head>
<body>
    

            <div class="card">
                <h2>Add Employee</h2>
                <a href="employee_form.php">Add Employee</a>
            </div>

            <!-- Add more cards or features as needed -->

        </div>

        <div class="student-table">
            <h2>Employee Records</h2>
            <table>
                <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Birth Date</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch student records from the database and populate the table
                    $conn = mysqli_connect($host, $username, $password, $database);

                    $sql = "SELECT * FROM employees ";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['department'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['contact'] . '</td>';
                            echo '<td>' . $row['dob'] . '</td>';
                            echo '<td>' . $row['gender'] . '</td>';
                            echo '<td>' . $row['address'] . '</td>';
                            
                        
                        }
                    } else {
                        echo '<tr><td colspan="4">No student records found</td></tr>';
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
