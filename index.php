<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/13 0013
 * Time: 22:37
 */
//$db_name="databas9";
$link=mysqli_connect("localhost" ,"root","root","databas9");
$sql='select *from book';
$result=mysqli_query($link,$sql);
$rows=mysqli_fetch_array($result,MYSQLI_ASSOC);
$number=mysqli_num_rows($result);

include_once ('list.html');
