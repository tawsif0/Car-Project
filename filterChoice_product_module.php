<?php
function choice_filter()
{

        require_once 'class.php';
        include 'connection.php';

        $products = array();
        $html = '';






        //variables
        $type = '';

        $index = $_POST['choice'];
        switch ($index) {
                case 0:
                        $type = 'LAMBORGINI';
                        break;

                case 1:
                        $type = 'BMW';
                        break;
                case 2:
                        $type = 'Toyota';
                        break;
                case 3:
                        $type = 'Others';
                        break;
                default:
                        $type = '';
        }

        //sql

        $sqlf = "SELECT * FROM product where type = '".$type."'";



        //rsult fetch
        $resultf = mysqli_query($link, $sqlf);

        //noofdata
        $noOfDataf = mysqli_num_rows($resultf);







        $i = 0;





        while ($row = mysqli_fetch_array($resultf)) {
                $products[$i] = new pt();
                $products[$i]->id = $row['Id'];
                $products[$i]->name = $row['Name'];
                $products[$i]->price = $row['Price'];
                $products[$i]->qty = $row['qty'];
                $products[$i]->path = 'assets/images/product/'.$row['path'];
       

                $products[$i]->type = $row['type'];

                $html .='
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <img src="'.$products[$i]->path.'" alt="">
                            <h2 class="product_name">
                                <p>' . $products[$i]->name . '</p>
                            </h2>
                            <div class="rating">
                                ' . $products[$i]->qty . '
                            </div>
                            <h2 class="price">৳ ' . $products[$i]->price . '</h2>
                            <div class="btn d-flex justify-content-between align-items-center">
                                <a  class="add-to-cart-btn">
                                    <i class="bi bi-cart4"></i> Add to Cart
                                </a>
                                <a  class="add-to-favorite text-success">
                                    <i class="bi bi-heart "></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ';


                
                $i++;
        }
        if($html == ''){
                $html = '<span class="my-4">No product to show</span>';
        }
        echo $html;
}

choice_filter();
