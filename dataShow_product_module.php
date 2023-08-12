<?php


function product_list()
{
        include 'product_data.php';

        $j = 0;

        while ($j < $i) {
                $rating = '';

                echo '<tr >
                    <td>' . $products[$j]->name . '</td>
                    <td>' . $products[$j]->code. '</td>
                    <td>' . $products[$j]->price . '</td>
                    <td>' . $products[$j]->type . '</td>
                    <td>' . $products[$j]->qty . '</td>
                   
                     </tr>';


                $j++;
        }
}
?>