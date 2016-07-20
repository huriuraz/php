<?php
/**
 * Created by PhpStorm.
 * User: Huri
 * Date: 20.7.2016
 * Time: 13:38
 */
$host="localhost";
$user="root";
$pass="";
$db="deneme";
$conn=mysqli_connect($host,$user,$pass,$db);
mysqli_query($conn,"SET NAMES utf8");
session_start();