<?php
/**
 * Common definitions and functions.
 * 
 * @author Dr. Takeyuki UEDA
 * @copyright Copyright© Atelier UEDA 2018 - All rights reserved.
 *
 */
define('COPYRIGHT', '© Atelier UEDA🐸');

// lang code: http://www.futomi.com/lecture/env_var/http_accept_language.html
function cmn_check_lang(){
	if (isset($_GET['lang'])){
    $lang = $_GET['lang'];
  } elseif (isset($_POST['lang'])){
    $lang = $_POST['lang'];
  } else {
    // ブラウザの言語設定
    // https://qiita.com/Sankame/items/ceaaf07c7d870e5e5248
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch($lang){
      case "en": // U.K. English
      case "ja": // Japanese
//      case "zh": // Chinese
        break;
      default:
        $lang = "en";
        break;
    }
  }
  return $lang;
}


function show_html_head($title) {
//  function show_html_head start.
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="/SCRIPT/gc_common/node_modules/jquery-mobile/dist/jquery.mobile.min.css" />
  <script src="/SCRIPT/gc_common/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/SCRIPT/gc_common/node_modules/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="/SCRIPT/gc_common/resource/custom-scripting.js"></script>
  <script src="/SCRIPT/gc_common/node_modules/jquery-mobile/dist/jquery.mobile.min.js"></script> -->
  <link rel="stylesheet" href="/SCRIPT/gc_common/resource/jquery.mobile-1.3.2.min.css" />
  <script src="/SCRIPT/gc_common/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/SCRIPT/gc_common/node_modules/jquery-migrate/dist//jquery-migrate.min.js"></script>
  <!-- <script src="/SCRIPT/gc_common/resource/jquery-1.11.3.min.js"></script> -->
  <script src="/SCRIPT/gc_common/resource/custom-scripting.js"></script>
  <script src="/SCRIPT/gc_common/resource/jquery.mobile-1.3.2.min.js"></script>

  <link rel="icon" href="/SCRIPT/gc_common/resource/favicon.ico">

  <!-- BOOTSTRAP start -->
  <link rel="stylesheet" href="/SCRIPT/gc_common/node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/SCRIPT/gc_common/node_modules/bootstrap/dist/css/bootstrap-theme.min.css">
  <script src="/SCRIPT/gc_common/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- BOOTSTRAP end -->

  <!-- Font Awsome start -->
  <link href="/SCRIPT/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
  <!-- Font Awsome  end -->

</head>

<?php
//  function show_html_head end.
}

function show_html_footer() {
?>
<div data-role="footer" data-position="fixed" class="no-cache">
    <h4><?php echo COPYRIGHT ?></h4>
</div>

<?php  
//  function show_html_footer end.
}
