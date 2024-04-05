<!-- /*index.php */ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>
    <div class="vol">
        <div class="vol-header">
            <h1>Volunteer Form</h1>
        </div>
        <div class="vol-form" id="volunteerForm">
            <form method="post" id="form">
                <label for="">Enter your details:</label>
                <input type="text" name="fullname" id="fullname" placeholder="Full Name" required /><br>
                <input type="email" name="email" id="email" placeholder="Email" required />
                <br>
                 <input type="button" id="submit" value="Submit" name="volsubmit"
                        class="vol-button" />
            </form>
        </div>
    </div>
    <script src="form.js"></script>

</body>

</html>