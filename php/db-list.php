<?php
$connection = new mysqli("localhost" , "root" , "" , "regstr");


if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_error;
    exit();
  }

  $query = "select * from info";
  $result = $connection->query("$query");
if ($result->num_rows >0) {
  while($row =$result->fetch_array()){
        echo "<tr>";
        echo "<td>{$row['fname']}</td>";
        echo "<td>{$row['lname']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['country']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "<td>{$row['skills']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['dept']}</td>";
        echo '<td class="myBttns">';
        echo '<a  href="../php/edit.php?id='.$row["id"].'" class="edit">Edit</a>';
        echo '<a  href="../php/delete.php?id='.$row["id"].'" class="delete">Delete</a>';     
        echo "</td>";
        echo "</tr>";
  };
}else{
    echo "<tr>";
    echo '<td colspan="9">No Applicants yet .. <a href="../html/index.html">Register Now</a></td>';
    echo "</td>";
    echo "</tr>";
}
  $connection->close();
