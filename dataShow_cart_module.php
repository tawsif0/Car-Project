<?php



        include 'cart_data.php';
       

        $j = 0;

        while ($j < $i) {
                $rating = '';

                echo '<li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                  <h6 class="my-0">'.$cart[$j]->pname.'</h6>
                  
                </div>
                <span class="text-muted">'.$cart[$j]->price.'</span>
              </li>';


                $j++;
        }

?>