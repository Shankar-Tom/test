<?php

$tasks=getTask();

   echo' <table class="tasks">';
        while($task=$tasks->fetch_assoc())
        {
 echo "<tr><td>".$task['id']."   ".$task['task']."</td><td><a href='admin.php?action=edit&id=".$task['id']."'>Edit</a><a href='admin.php?action=delete&id=".$task['id']."'>Delete</a></td></tr>
            ";
        }
        
   echo' </table>
    <a  id="add" href="admin.php?action=add">Add Task</a>';
    ?>
