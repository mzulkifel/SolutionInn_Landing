<?php 

if(isset($_POST['query']))
{
    $servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) 
    {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_select_db("solutioninn");

$_query=$_POST['query'];
$sql= mysqli_query("SELECT * FROM books WHERE name LIKE '%[query]%' ");
$array=array();

while ($row= mysqli_fetch_assoc($sql))
{
    $array[]=$row['book_author'];
}

echo json_encode($array);

}
?>