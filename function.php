<?php

/***
@Author: Oyeniyi Abiola Peace
@Author URI: https://facebook.com/oyeniyi-abiola-peace
@Version: 1.0
@Description: is_similar_text is used to calculate the percentage of similarity between two strings or one array to a string. According to default if similarity is higher than or equal to 50% it will return true; else false. 
@usage: is_similar_text('stringA','stringB','30'); or is_similar_text('string','array','30'); will return true if similarity is greater than or equal to 30%.
***/
function is_similar_text($data = "", $compare = "", $percentage = 50) {
    
        if(is_array($data)) {
            foreach($data as $key => $value){
                if(similar_text($value, $compare, $calculated_percentage)) {
                    if($percentage <= $calculated_percentage){
                        return true;
                        continue;
                    }
                }
            }
        } else {
             if(similar_text($value, $compare, $calculated_percentage)) {
                    if($percentage <= $calculated_percentage){
                        return true;
                    }
             }
        }
}






?>
