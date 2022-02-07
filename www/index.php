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

    // 상세페이지 시작
    // 병원소개
    case '/doctor' :
        include_once(G5_PATH.'/pages/01_intro_01.php');
        break;
    case '/announce' :
        include_once(G5_PATH.'/pages/01_intro_02.php');
        break;
    case '/location' :
        include_once(G5_PATH.'/pages/01_intro_03.php');
        break;
    case '/lookaround' :
        include_once(G5_PATH.'/pages/01_intro_04.php');
        break;


    // 화상클리닉
    case '/burn' :
        include_once(G5_PATH.'/pages/02_burnclinic_01.php');
        break;
    case '/treatment' :
        include_once(G5_PATH.'/pages/02_burnclinic_02.php');
        break;
    case '/babyburn' :
        include_once(G5_PATH.'/pages/02_burnclinic_03.php');
        break;
    
    
    // 피부클리닉
    case '/colorlaser' :
        include_once(G5_PATH.'/pages/03_skinclinic_01.php');
        break;
    case '/shrink' :
        include_once(G5_PATH.'/pages/03_skinclinic_02.php');
        break;
    case '/massage' :
        include_once(G5_PATH.'/pages/03_skinclinic_03.php');
        break;
    case '/medicalcare' :
        include_once(G5_PATH.'/pages/03_skinclinic_04.php');
        break;
    case '/votox' :
        include_once(G5_PATH.'/pages/03_skinclinic_05.php');
        break;
    

    // 메디컬 클리닉
    case '/lipoma' :
        include_once(G5_PATH.'/pages/04_medicalclinic_01.php');
        break;
    case '/suture' :
        include_once(G5_PATH.'/pages/04_medicalclinic_02.php');
        break;
        

    // 건강 클리닉
    case '/healthclinic' :
        include_once(G5_PATH.'/pages/05_healthclinic_01.php');
        break;


    //커뮤니티
    case '/notice' :
        include_once(G5_PATH.'/pages/06_community_01.php');
        break;
    case '/community' :
        include_once(G5_PATH.'/pages/06_community_02.php');
        break;


    default:
        http_response_code(404);
        include_once(G5_PATH.'/pages/404.php');  //404 파일이 있다면, 없으면 main으로 연결 추천
        break;
}
include_once(G5_PATH.'/tail.php');