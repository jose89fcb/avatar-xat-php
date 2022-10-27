<?php

 
$context = stream_context_create($opts);
 
 
$avatar = $_GET["avatar"];
 
$file = file_get_contents("https://xat.com/web_gear/chat/profile2.php?n=$avatar", false, $context);
 
 
 
 
$image_data = json_decode($file, true);
$Avatarxat = json_decode($file, true);
 
 
$news = json_decode($news, true); {
 
 
 
 
}
 
 
?><?php  for ($i = 0; $i < count($image_data['Err']); $i ++) {
   
  }?>


<?php echo  $Avatarxat['Err']['Media']['avatar'];  ?>
