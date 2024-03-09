<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .info , .verified {
            display: inline-block;
        }
        .verified {
            width: 200px;
            height: 200px;
            float: right;
            margin-top:50px ;
            margin-right: 60px;
        }
        .info {
            margin-left: 40px;

        }

        h3{
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        label {
            font-weight: bold;
        }

        .info {
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            margin-bottom: 30px;
        }
        .myBttns{
            margin-top: 50px;
        }
        .myBttns a{
            text-decoration: none;
            color: white;
            padding : 10px ;
            border: none;
            border-radius: 5px;
        }
        .myBttns .edit-bttn { 
            background-color:#f44336;
        }
        .myBttns .see-bttn {
            background-color:  #4CAF50;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Welcome <?php echo $gend.' '.$fname . " " . $lname?>, Please review your info ...</h3>
        <div class="info">
            <p><label>Name:</label> <?php echo $fname . " " . $lname; ?></p>
            <p><label>Address:</label> <?php echo $address.', '.$country; ?></p>
            <p><label>Gender:</label> <?php echo isset($gender) ? $gender : "Not specified"; ?></p>
            <p><label>Skills:</label> <?php echo $skills ;
                                        ?></p>
            <p><label>Email:</label> <?php echo $email; ?></p>
            <p><label>Department:</label> <?php echo $dept; ?></p>
            <div class="myBttns">
            <a class="edit-bttn" href="">Edit Info</a>
            <a class="see-bttn" href="../html/list.php?db">View Info From DB</a>
            <a class="see-bttn" href="../html/list.php?local">View Info From Local</a>
        </div>
        </div>
        <img class="verified" src="../img/download (3).png" alt="">

    </div>
</body>

</html>
