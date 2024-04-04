<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      max-width: 500px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Add a New Person</h2>
    <form action="submit_form.php" method="POST">
      <label for="fname">First Name:</label>
      <input type="text" id="fname" name="fname" required>
      
      <label for="lname">Last Name:</label>
      <input type="text" id="lname" name="lname" required>
      
      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Other</option>
      </select>
      
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>
      
      <label for="tel">Telephone:</label>
      <input type="tel" id="tel" name="tel" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="passwd">Password:</label>
      <input type="password" id="passwd" name="passwd" required>
      
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
