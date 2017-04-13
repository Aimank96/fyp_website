<?php
$Boarding= $_POST["boarding"];

$Ending=$_POST["Ending"];

$price=($Ending-$Boarding)*0.7;

echo abs($price);
/* 
 *
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

