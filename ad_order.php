<h2>Orders</h2>
<br>
<input type="text" class="mb-2 bg-transparent text-light rounded" id="myInput1" onkeyup="myFunction1()" placeholder="Search for names.." title="Type in a name">


<div class=" x mx-2 col-md-10  rounded shadow " style="height:400px;">
  <div class="v1">

    <table id="myTable1" class="table  text-light " style="">
    <tr class="header">
        <th> ID</th>
        <th >Email</th>
        <th >Address</th>
         

      </tr>
    <?php 
     
     $query = " SELECT * FROM  orders ";
     $selected = mysqli_query($link, $query);
     $num = mysqli_num_rows($selected);
     while ($row = mysqli_fetch_array($selected)) {
     
     ?>
           <tr>
             <td>
               <?php echo $row['Id']; ?>
             </td>
             <td>
               <?php echo $row['email']; ?>
             </td>
             <td>
               <?php echo $row['address']; ?>
             </td>
           
           </tr>
           <?php
     }
         ?>
    </table>









  </div>
</div>