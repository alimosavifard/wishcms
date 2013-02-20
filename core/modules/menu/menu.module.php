<?php


// Select all entries from the menu table
$result= db_query("SELECT id, label, link, parent FROM menu ORDER BY parent, sort, label");
// Create a multidimensional array to conatin a list of items and parents
$menu = array(
    'items' => array(),
    'parents' => array()
);
// Builds the array lists with data from the menu table

while ($items = $result->fetch_assoc())
{
    // Creates entry into items array with current menu item id ie. $menu['items'][1]
    $menu['items'][$items['id']] = $items;
    // Creates entry into parents array. Parents array contains a list of all items with children
    $menu['parents'][$items['parent']][] = $items['id'];
}


// Menu builder function, parentId 0 is the root
function buildMenu($parent, $menu)
{
   $html = "";
   if (isset($menu['parents'][$parent]))
   {
      $html .= "
      <ul>\n";
       foreach ($menu['parents'][$parent] as $itemId)
       {
          if(!isset($menu['parents'][$itemId]))
          {
             $html .= "<li>\n  <a href='".$menu['items'][$itemId]['link']."'>".$menu['items'][$itemId]['label']."</a>\n</li> \n";
          }
          if(isset($menu['parents'][$itemId]))
          {
             $html .= "
             <li>\n  <a href='".$menu['items'][$itemId]['link']."'>".$menu['items'][$itemId]['label']."</a> \n";
             $html .= buildMenu($itemId, $menu);
             $html .= "</li> \n";
          }
       }
       $html .= "</ul> \n";
   }
   return $html;
}



?>