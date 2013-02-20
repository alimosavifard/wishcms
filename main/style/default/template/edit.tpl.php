<form method="post" action="">
	<label for="name">title:</label>
	<input name="name" id="name" type="text" maxlength="150" /> 
<br />  <br />   
<label for="Content">Content:</label>
	<textarea name="content" style="width:100%; height:200px; ">
	</textarea>
	<br /> 
	<label for="url">Page Path:</label>
	<input name="path" id="path" type="text" maxlength="150" />   
	<INPUT type="submit" value="Save"/>
</form>
	
	
	
	
	
	
<?php

if(isset($_POST['save'])) {

       	      	   $update = array (
      				  'name' => $_POST['name'],
      				  'content' => $_POST['content'],
      				  'path' => $_POST['path']
      				);


db_update ('pages', $update, 'id', $node['id']);

}




?>
