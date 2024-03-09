<?php

$data = file("../applicants.txt");

if (count($data) > 0){
for ($i = 0; $i < count($data); $i++) {
    echo "<tr>";
    $row = explode(",", $data[$i]);
    foreach ($row as $item) {
        echo "<td>{$item}</td>";
    }
    echo '<td class="myBttns">';
    echo '<a class="edit">Edit</a>';
    echo '<a class="delete">Delete</a>';
    echo "</td>";
    echo "</tr>";
}} else {
    echo "<tr>";
    echo '<td colspan="9">No Applicants yet .. <a href="../html/index.html">Register Now</a></td>';
    echo "</td>";
    echo "</tr>";
}
