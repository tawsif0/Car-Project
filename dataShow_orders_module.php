<?php


function order_list()
{
        include 'orders_data.php';

        $j = 0;
$i=0;
        while ($j < $i) {
                $rating = '';

                echo '<tr >
                   
                    <td>' . $orders[$j]->email . '</td>
                    <td>' . $orders[$j]->address . '</td>
            
                    <td><button class="text-light shadow btn btn-danger">Approve</button></td> 
                  </tr>';


                $j++;
        }
}
?>