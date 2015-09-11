<?php
// Referer is OWN DOMAIN.
if(isset($_COOKIE['validCookie'])) {
  if($_COOKIE['validCookie'] == true){
    header('Content-type: xml');

    if(isset($_GET['tags'])){
      $tags = $_GET['tags'];
    }else{
      $tags = "";
    }
    if(isset($_GET['page'])){
      $page = $_GET['page'];
    }else{
      $page = "1";
    }
    if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
    }else{
      $limit = 10;
    }

    echo (file_get_contents("https://e621.net/post/index.xml?tags=". $tags ."&limit=".$limit."&page=".$page));
  }else{
    header('Content-type: text');
    echo "Not much protection, just saying. \n";
    die("Hotlinking not permitted.");
  }
}else {
  header('Content-type: text');
  echo "Not much protection, just saying. \n";
  die("Hotlinking not permitted.");
}
?>
