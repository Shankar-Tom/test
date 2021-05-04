<?php
include('controller.php');

if(isset($_POST['submit']))
{
    $newtask=$_POST['task'];
    addTask($newtask);
    include('template_list.php');
    exit();
}
if(isset($_GET['action']))
{
    $action=$_GET['action'];
   
    if($action=='edit')
   {
    $id=$_GET['id'];
    $result=getSingleTask($id);
    $task=$result['task'];

   }
   if($action=='add')
   {
    $task='ADD TASK';
   }
   if($action=='delete')
   {
    $id=$_GET['id'];
            delete($id);
            include('template_list.php');
    exit();
 }
}
else{
    include('template_list.php');
    exit();
}
?>



<form  method="post">
   <input type="text" name="task" placeholder='<?= $task ?>' required>
<input type="submit" name="submit" value="Save">
</form>