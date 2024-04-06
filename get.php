<!-- /*get.php */ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;,">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>
    <div class="vol">
        <div class="vol-header">
            <h1>Volunteers</h1>
        </div>
        <a href="index.php">Be A Volunteer</a>
        <div id="table_data">
            <input type="button" id="getusers" value="Get Volunteers" name="volsubmit" class="vol-button" />
        </div>
        <div id="name"></div>
        <div id="email"></div>

    </div>
    <script src="getusers.js"></script>

</body>

</html>