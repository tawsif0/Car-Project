<?php
function msg_list_us()
{
        include 'msg_data_us.php';

        $j = 0;

        while ($j < $k) {
                $rating = '';
                $stat = '';
                if($msg1[$j]->ans == ''){
                        $stat = '<span class="text-danger">Not answered</span>';
                }else{
                        $stat = '<span class="text-success">Answered</span>';
                }

                echo ' <div onclick="see(\''.$msg1[$j]->text.'\',\''.$msg1[$j]->ans.'\')" class="card bg-dark z  mb-1" style="">
                                <div class="card-body text-light" >
                                        <h5>'.$msg1[$j]->subject.'</h5>
                                        <p>'.$stat.'</p>
                                        

                                </div>
                        </div>
        
        
        
        ';


                $j++;
        }
}

?>