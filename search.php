<!DOCTYPE html>
<html>
<head>
    <title>Search Bar</title>
    <style>
        .search-container {
            margin-top: 30px;
            padding-top: 60px;
            padding-bottom: 30px;
            
         display: flex;
         align-items: center;
         justify-content: center;
           
        }
        .search-container input[type=text] {
            padding: 10px;
            width: 300px;
          
            
        }
        .search-container input[type=submit] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
           
            
        }
        .search-container input[type=submit]:hover {
            background-color: orange;
           
        }
    </style>
</head>
<body>
    <div class="search-container">
        <form action="searchv.php" method="POST">
            <input type="text" placeholder="Enter the chassis number" name="search">
            <input type="submit" value="Search">
        </form>
    </div>
</body>
</html>
