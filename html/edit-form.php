<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="reset"] {
            background-color: #f44336;
        }

        button[type="submit"]:hover,
        button[type="reset"]:hover {
            opacity: 0.8;
        }

        .choose {
            display: flex;
        }
    </style>
</head>


<body>
    <div class="container">
        <h2>Edit
            <?php echo $fname ?>'s Info
        </h2>
        <form action="../php/update.php" method="post">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" name="fname" id="fname" value="<?php echo $fname ?>" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" name="lname" id="lname" value="<?php echo $lname ?>" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" rows="3" required><?php echo $address ?></textarea>
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select name="country" id="country" required>
                    <option value="" disabled>Select Country</option>
                    <option value="Egypt" <?php if ($country == 'Egypt')
                        echo 'selected'; ?>>Egypt</option>
                    <option value="USA" <?php if ($country == 'USA')
                        echo 'selected'; ?>>USA</option>
                    <option value="KSA" <?php if ($country == 'KSA')
                        echo 'selected'; ?>>KSA</option>
                    <option value="Canada" <?php if ($country == 'Canada')
                        echo 'selected'; ?>>Canada</option>
                </select>
            </div>

            <div class="form-group choose">
                <label>Gender:</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($gender == 'female')
                    echo 'checked'; ?>>
                <label for="female">Female</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male')
                    echo 'checked'; ?>>
                <label for="male">Male</label>
            </div>
            <div class="form-group choose">
                <label>Skills:</label>
                <input type="checkbox" id="HTML" name="skills[]" value="HTML" <?php if (str_contains($skills, 'HTML')) {
                    echo 'checked';
                } ?>>
                <label for="HTML">HTML</label>
                <input type="checkbox" id="JS" name="skills[]" value="JS" <?php if (str_contains($skills, 'JS')) {
                    echo 'checked';
                } ?>>
                <label for="JS">JavaScript</label>
                <input type="checkbox" id="CSS" name="skills[]" value="CSS" <?php if (str_contains($skills, 'CSS')) {
                    echo 'checked';
                } ?>>
                <label for="CSS">CSS</label>
                <input type="checkbox" id="PHP" name="skills[]" value="PHP" <?php if (str_contains($skills, 'PHP')) {
                    echo 'checked';
                } ?>>
                <label for="PHP">PHP</label>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $email ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Re-enter your password" required>
            </div>
            <div class="form-group">
                <label for="dept">Department:</label>
                <input type="text" name="dept" id="dept" value="Open Source" disabled>
            </div>
            <div class="form-group">
                <button type="submit">Edit</button>
                <button type="reset">Reset</button>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">

        </form>
    </div>
</body>

</html>