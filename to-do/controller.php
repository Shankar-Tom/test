<?php
$username='root';
$password='';
$database='to_do';
$connect=new mysqli('localhost',$username,$password,$database) or die('Connection Failed');

function getTask(){
    global $connect;
    $sql="select * from tasks";
    return $connect->query($sql);
  
}
function getSingleTask($id)
{
    global $connect;
    $sql="select * from tasks where id='$id'";
  $result= $connect->query($sql);
  return $result->fetch_assoc();
}
function delete($id){
    global $connect;
    $sql="delete from tasks where id='$id'";
  $result= $connect->query($sql);
}
function addTask($task)
{
    global $connect;
    $sql="insert into tasks(`task`) values ('$task')";
    $result= $connect->query($sql);
}

