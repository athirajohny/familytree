<?php
 require_once('connect.php');

 $query = "SELECT id, name, partner,parents FROM member"; 

$menu = mysqli_query($conn, $query); 

function has_children($rows,$id) {
    foreach ($rows as $row) {
      if ($row['parents'] == $id)
        return true;
    }
    return false;
  }
  function build_menu($rows,$parent=0)
  {  
    $result = "<ul>";
    foreach ($rows as $row)
    {
      if ($row['parents'] == $parent){
        $result.= "<li>{$row['name']}"."-"."{$row['partner']}";
        if (has_children($rows,$row['id']))
          $result.= build_menu($rows,$row['id']);
        $result.= "</li>";
      }
    }
    $result.= "</ul>";
  
    return $result;
  }
  echo build_menu($menu);

  ?>