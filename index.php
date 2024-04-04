<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="vol">
    <div class="vol-header">
      <h1>Volunteer Form</h1>
    </div>
    <div class="vol-form">
      <form action="../read.php">
        <label for="">Enter your details:</label>
        <input type="text" name="Fullname" placeholder="Full Name" required /><br>
        <input type="email" placeholder="Email" required />
        <br>
        <input type="button" value="Submit" name="volsubmit" class="vol-button" />
      </form>
    </div>
  </div>
</body>

</html>