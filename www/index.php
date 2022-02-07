<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_PATH.'/head.php');
include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        include_once(G5_PATH.'/pages/main.php'); //경로에 따른 본문 include 파일
        break;
    case '' :
        include_once(G5_PATH.'/pages/main.php');
        break;
    case '/about' :
        include_once(G5_PATH.'/pages/about.php');
        break;
    default:
        http_response_code(404);
        include_once(G5_PATH.'/pages/404.php');  //404 파일이 있다면, 없으면 main으로 연결 추천
        break;
}
include_once(G5_PATH.'/tail.php');