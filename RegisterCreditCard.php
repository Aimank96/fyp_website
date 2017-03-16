<?php
include 'DBCONFIG.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $CardNumber = $_POST['CardNumb'];
    $Expiry = $_POST['Expiry'];
    $CVV = $_POST['CVV'];
    

    echo "$CardNumber kkkk";
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

