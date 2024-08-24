<!DOCTYPE html>
<html lang="en">
<head>
   <title>DevOps</title>
</head>
<body>
   <h1>Welcome to Fredrick World</h1>
   <ul>
       <?php
           $json = file_get_contents('http://devops');
           $obj = json_decode($json);
           $devops = $obj->devops;
           foreach ($devops as $devop){
               echo "<li> $devop </li>";
           }
       ?>
   </ul>
</body>
</html>
