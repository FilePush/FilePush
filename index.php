<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/includes/init.php');

$pages = array(
  "users","hoa","bans","upload","view_uploads","sharex","sharenix","other","help","admin_panel","api","banned","domains","donate","faq","login","logout","privacy","profile","public_uploads","register","report","reset_password","set_password","settings","shortened_links","shortener","tos","view_upload","uploads","verify"
);
if(isset($_GET["page"])) {
  $page = $_GET["page"];
  if($page[0] == "/") {
    $page = substr($page, 1);
  }
  if(in_array($page, $pages)) {

    include "includes/pages/$page.php";
  } else { 
    include "includes/pages/404.php";
  }
} else {
  include "includes/pages/home.php";
}
?>
