<?php
require "vendor/autoload.php";
use App\DbConnection;

$dbConnection = new DbConnection();
$dbConnection->dbConnect();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Harry Potter Books</title>
</head>
<body>
    <h1>Choose your books</h1>
    <h2>Buy more than one and get a discount :)</h2>
</body>
</html>
