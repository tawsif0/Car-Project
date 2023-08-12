<?php

function msg_list()
{
        include 'msg_data.php';

        $j = 0;

        while ($j < $i) {
                $rating = '';

                echo ' <div onclick="toReply(\''.$msg[$j]->text.'\',\''.$msg[$j]->user_email.'\')" class="card bg-dark z  mb-1" style="">
                                <div class="card-body text-light" >
                                        <h5>'.$msg[$j]->subject.'</h5>
                                        <p>'.$msg[$j]->user_email.'</p>
                                        

                                </div>
                        </div>
        
        
        
        ';


                $j++;
        }
}

?>