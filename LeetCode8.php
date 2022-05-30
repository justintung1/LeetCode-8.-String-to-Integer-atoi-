<?php
    class Solution {

        /**
         * @param String $s
         * @return Integer
         */
        function myAtoi($s) {
            $s=trim($s);
            $current="";
            if(strlen($s)!=1 && $s[0]=='-' || $s[0]=='+'){
                $i=1;
                $current.=$s[0];
            }
            else if(is_numeric($s[0])){
                $i=0;
            }
            else{
                return 0;
            }
            for($i;$i<strlen($s);$i++){
                if(is_numeric($s[$i])){
                    $current.=$s[$i];
                }
                else{
                    break;
                }
            }
            $output=(int)$current;
            if($output>=-2147483648 && $output<=2147483647){
                return $output;
            }
            else{
                if($output<-2147483648){
                    return -2147483648;
                }
                else{
                    return 2147483647;
                }
            }
        }
    }
?>