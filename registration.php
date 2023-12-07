<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Registration Form</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
      }

      form {
        max-width: 400px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      label {
        display: block;
        margin-bottom: 8px;
      }

      input {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        background-color: #4caf50;
        color: white;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }
    </style>
  </head>
  <body>
    <form method="post" action= "./controllers/store.php">
      <h2>Student Registration Form</h2>

      <label for="fullName">Full Name:</label>
      <input type="text" id="fullName" name="fullName" required />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required />

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required />

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="course">Course of Interest:</label>
      <input type="text" id="course" name="course" required />

      <label for="comments">Comments:</label>
      <textarea id="comments" name="comments" rows="4"></textarea>

      <input type="submit" value="Submit" name="submit"/>
    </form>
  </body>
</html>

<?php
  if($_POST['submit']){
      
  }
?>

