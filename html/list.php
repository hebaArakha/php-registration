<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Applicants</title>
</head>
<style>
/* General styling */
h2 {
    text-align: center;
    margin-top: 30px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

/* Alternating row colors */
tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Hover effect */
tr:hover {
    background-color: #ddd;
}

/* Button styling */
.myBttns {
    display: flex;
    justify-content: space-evenly;
}

.myBttns a {
    text-decoration: none;
    color: white;
    width: 30%;
    padding: 5px 8px;
    border: none;
    border-radius: 5px;
    display: flex;
    justify-content: space-evenly;
}

.myBttns .edit {
    background-color: #6b756b;
}

.myBttns .delete {
    background-color: #f44336;
}

</style>
<body>
    <table>
    <h2>Applicants Information</h2>
        <tr>
            <th>First name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Country</th>
            <th>Gender</th>
            <th>Skills</th>
            <th>Email</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        <?php
        if (isset($_GET['local'])){
            require_once('../php/f-list.php');
        } else if (isset($_GET['db'])) {
            require_once('../php/db-list.php');
        }
        ?>
    </table>
</body>
</html>