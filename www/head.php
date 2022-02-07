<?php
  if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

  run_event('pre_head');

  include_once(G5_PATH.'/head.sub.php'); // link, metatag, script 
  include_once(G5_LIB_PATH.'/latest.lib.php'); //최신글 불러오기 라이브러리
  include_once(G5_LIB_PATH.'/outlogin.lib.php');
  include_once(G5_LIB_PATH.'/poll.lib.php');
  include_once(G5_LIB_PATH.'/visit.lib.php');
  include_once(G5_LIB_PATH.'/connect.lib.php');
  include_once(G5_LIB_PATH.'/popular.lib.php');

  include_once(G5_PATH.'/header.php'); //header(nav)
?>