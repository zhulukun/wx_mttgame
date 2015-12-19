<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Hello extends CI_Controller{
    public function index(){
        echo 'hello';
    }
    public function get_hello_world($hello){
        echo 'hello world'.$hello;
    }
    
    private function method(){
        echo 'this is a method';
    }
    
    function getRandomNum($min,$max,$count = 3){
            $nums = array();
            //if count greater than range return all number from min to max
            if($count > ($max - $min + 1)){
                $num = $min;
                while ($num <= $max){
                    array_push($nums, $num);
                    $min++;
                }
                return $nums;
            }
            
            $range = range($min, $max);
            shuffle($range);
            $randomNums = array_slice($range, 0,$count);
            $sql = '';
            foreach ($randomNums as $randomNum){
                $sql .= 'missionCode = '.$randomNum.' OR ';
            }
            $realsql = substr($sql, 0, (strlen($sql) - 3));
            echo $realsql;
        }
}
?>
