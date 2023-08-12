
<!Doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lift</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>list</title>
  
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/adlog.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <!--Header section-->
    <?php include 'header.php' ?><br> <br> <br>
<?php
 
require_once 'class.php';
include 'connection.php';

if(isset($_POST['search'])) {
    
    $search = $_POST['search'];
    
  
    $search = mysqli_real_escape_string($link, $search);
    
   
    $query = "SELECT * FROM product WHERE code LIKE '%$search%'";
   

    $result = mysqli_query($link, $query) or die("SQL Query Failed.");;
    
    $output = "";
    if(mysqli_num_rows($result) > 0) {
        $output = '<table id="myTable1" class="table  text-dark " border="10" width="100%" cellspacing="0" cellpadding="20px"  >
        <tr>
          
          <th>Name</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Type</th>
          <th>Chassis number</th>
          <th></th> 
        </tr>';
        while($row = mysqli_fetch_array($result)) {
            
            $catSql = "SELECT name FROM type WHERE id={$row['code']}";
            $catResult = mysqli_query($link, $query) or die("SQL Query Failed.");
            $catRow = mysqli_fetch_assoc($catResult);
                          $output .= "<tbody><tr>
                          <td >{$row["Name"]}</td>
                          <td>{$row["Price"]}</td> 
                          <td >{$row["qty"]}</td>
                          <td >{$row["type"]}</td>
                          <td >{$row["code"]}</td>
                         
                          
                          </tr></tbody>";

                        }
                       
                        $output .= "</table>";

              mysqli_close($link);
          
              echo $output;
          
            
        
    } else {
        echo "<p align='center'>No results found.</p>";
        
    }
  
}
?>
 <?php
    include 'logic.php';


    ?>

    

</body>

</html>