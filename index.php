<?php
// this file routes the displayment of all pages.
// it is supposed to be used with nginx which can route the requested page "https://filepu.sh/example" via /index.php?page=example
require_once ('includes/init.php'); // include the init file. this initiates the session, gets the user info when logged in and more.

$pages = array( // array of pages which exist - if you add a page and it doesn't work, you'll need to add it here!
  "users","bans","upload","view_uploads","sharex","sharenix","other","help","admin_panel","api","banned","domains","donate","faq","login","logout","privacy","profile","public_uploads","register","report","reset_password","set_password","settings","shortened_links","shortener","tos","view_upload","uploads","verify"
);
if(!empty($_GET["page"])) { // 
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
