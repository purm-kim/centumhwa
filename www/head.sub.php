<?php
// <head> 태그 내부만 수정

// JS, CSS include (루트 경로 기준으로 include하면 서브 페이지도 동일하게 작동합니다.

// JS include 예시
add_javascript('<script src="'.G5_JS_URL.'/jquery-3.6.0.min.js"></script>', 0);

// CSS include 예시
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/style.min.css">', 3);


// G5_JS_URL = 루트경로/js/
// G5_CSS_URL = 루트경로/css/
// include 구문 뒤의 숫자로 불러오는 순서를 변경할 수 있습니다.