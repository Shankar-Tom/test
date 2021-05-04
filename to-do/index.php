<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div id="box">
    </div>
   
    <?php
require('controller.php');
$tasks=getTask();

   echo' <table >';
   $i=1;
        while($task=$tasks->fetch_assoc())
        {
 echo "<tr><td id='task".$i."'> ".$task['id']."   ".$task['task']."</td></tr>";
 $i++;
        }
        
 
    ?>
    <script>
        total='<?= $i ?>';
    </script>
<script src="slider.js"></script>
</body>
</html>