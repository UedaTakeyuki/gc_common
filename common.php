<?php
/**
 * Common definitions and functions.
 * 
 * @author Dr. Takeyuki UEDA
 * @copyright Copyright© Atelier UEDA 2018 - All rights reserved.
 *
 */

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
      case "zh": // Chinese
        break;
      default:
        $lang = "en";
        break;
    }
  }
  return $lang;
}
