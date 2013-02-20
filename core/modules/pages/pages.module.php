<?php

$path=$path; // acees outpot varable 
$frontpage= false ;
//corrent reqest page
if ($path != '') { $page  = $path; } else { $page = $config['frontpage']; $frontpage= true ; };



//finde reqesu id
$result = db_query ("SELECT * FROM `pages` WHERE `path` = '$page'"); 
while ($data = $result->fetch_object()) { 
       	      	   $node = array (
       	      	   	'id' => $data->id,
      				'name' => $data->name,
      				'content' => $data->content,
      				'type' => $data->type
      				);
    
}


function box_list() {
	global $page;
     // List all Result on a array $node
   $result = db_query ("select * from pages");
   while ($data = $result->fetch_object()) { 
   	      	   $node[$data->id] = array (
      				'name' => $data->name,
      				'content' => $data->content,
      				'path' => $data->path
      				);
   }
      foreach($node as $id=>$id_value){
  	  print "<h2><a href=" . $id_value['path'] . " >" . $id_value['name'] . "</a></h2>";
  	  print "<div class='content'>" . $id_value['content']  . " </div>" ;
    }
}







?>