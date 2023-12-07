<?php
    include '../database.php';
    include '../config.php';
    
    $name = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $comments = $_POST['comments'];
    
    $d = new Database($config);
        try {
            $query = "INSERT INTO student_details (name, email, password, phone_number, gender, course, comments) VALUES(:name, :email, :password, :phone, :gender, :course, :comments)";

            $statement = $d->connection->prepare($query);

            $statement->bindParam(':name', $name);
            $statement->bindParam(':email', $email);
            $statement->bindParam(':password', $password);
            $statement->bindParam(':phone', $phone);
            $statement->bindParam(':gender', $gender);
            $statement->bindParam(':course', $course);
            $statement->bindParam(':comments', $comments);

            $execute = $statement->execute();

            if ($execute) {
                echo "Record inserted successfully";
            } else {
                echo "Error inserting record: " . $statement->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    



    
?>