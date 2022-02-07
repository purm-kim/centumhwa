<!-- pc 슬라이드 시작 -->
<section class="pc_img_slide">
  <div class="swiper pc_img_slide">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/img/main/main_banner.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/main_banner.jpg" alt="">
      </div>
      <div class="swiper-slide">
        <img src="/img/main/main_banner.jpg" alt="">
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>
<!-- pc 슬라이드 끝 -->
<!-- mob 슬라이드 시작 -->
<div class="swiper mob_img_slide">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="/img/mobile/1.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="/img/mobile/1.jpg" alt="">
    </div>
    <div class="swiper-slide">
      <img src="/img/mobile/1.jpg" alt="">
    </div>
  </div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>
<!-- mob 슬라이드 끝 -->
<!-- 퀵메뉴(모바일) 시작 -->
<!-- <div class="quickmenu_mb_wrap"> -->
  <ul class="quickmenu_mb">
    <li class="bg_gray">
      <a href="">
        <img src="/img/common/icon_notice.png" alt="">
        <p class="txt">공지사항</p>
      </a>
    </li>
    <li class="bg_gray">
      <a href="">
        <img src="/img/common/icon_doc.png" alt="">
        <p class="txt">의료진소개</p>
      </a>
    </li>
    <li class="bg_gray">
      <a href="">
        <img src="/img/common/icon_hospital.png" alt="">
        <p class="txt">병원 둘러보기</p>
      </a>
    </li>
    <li class="bg_gray">
      <a href="">
        <img src="/img/common/icon_location.png" alt="">
        <p class="txt">오시는 길</p>
      </a>
    </li>
  </ul>
<!-- </div> -->
<!-- 퀵메뉴(모바일) 끝 -->
<!-- banner_menu 시작 -->
<div class="banner_menu">
  <ul class="flex_5">
    <li><a href="/burn"><img src="/img/main/banner_menu_01.jpg" alt=""></a></li>
    <li><a href="/colorlaser"><img src="/img/main/banner_menu_02.jpg" alt=""></a></li>
    <li><a href="/lipoma"><img src="/img/main/banner_menu_03.jpg" alt=""></a></li>
    <li><a href="/doctor"><img src="/img/main/banner_menu_04.jpg" alt=""></a></li>
    <li><a href="tel:051-710-8253"><img src="/img/main/banner_menu_05.jpg" alt=""></a></li>
  </ul>
</div>
<!-- banner_menu 끝 -->
<!-- 백그라운드 고정 배너 시작 -->
<section class=" fixed_banner">
  <div class="">
    <div class="txt_con">
      <h2 class="h2">화마에 의한 흉터와 통증,
        맞춤형 화상 치료로 극복하세요!
      </h2>
      <span class="">응급화상처치 및 피부이식수술에 특성화된 외과전문의 
        <br>피지낭종, 지방종 미니멀한 절개로 뿌리까지 제거
        <br>미국산 정품 피코레이저와 재활마사지로 각종 흉터 최소화
      </span>
    </div>
  </div>
</section>
<!-- 백그라운드 고정 배너 끝 -->
<!-- 공지사항 & 오시는 길 시작 -->
<section class="main_style notice_location">
  <div class="w-1200">
    <div class="notice">
      <h3 class="notice_title">공지사항
          <a href="" class="view_more">
            <img src="/img/common/icon_plus.png" alt="">
          </a>
      </h3>
      <div class="notice_list">
        <ul>
          <li>
            <a href="">설연휴 진료 안내</a>
            <span>2022-01-17</span>
          </li>
          <li>
            <a href="">12월 진료시간 안내</a>
            <span>2021-12-06</span>
          </li>
          <li>
            <a href="">5월 진료안내</a>
            <span>2021-04-26</span>
          </li>
          <li>
            <a href="">삼일절 진료안내</a>
            <span>2021-02-22</span>
          </li>
          <li>
            <a href="">12월 진료시간 안내</a>
            <span>2022-12-08</span>
          </li>
          <li>
            <a href="">추석 진료안내</a>
            <span>2020-09-21</span>
          </li>
          <li>
            <a href="">진료 및 입원 안내</a>
            <span>2020-08-31</span>
          </li>
          <li>
            <a href="">센텀화외과 홈페이지 방문을 환영합니다.</a>
            <span>2020-02-07</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="location">
      <div class="txt_location">
        <div class="con">
          <b class="bold">찾아오시는 길</b>
          <span>부산광역시 해운대구 해운대로 365, 7층</span>
        </div>
        <div class="con">
          <p>벡스코역 8번 출구</p>
          <p>벡스코메디컬빌딩 7층</p>
          <i>051.710.8253</i>
        </div>
        
      </div>
      <div class="map_api" id="map"></div>
    </div>
  </div>
</section>
<!-- 공지사항 & 오시는 길 끝 -->

<!-- swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<!-- 카카오 맵 api -->
<script src="//dapi.kakao.com/v2/maps/sdk.js?appkey=8e2742085b5c9fe0f92fe418bdde2b59"></script>

<script>
  var swiper = new Swiper(".pc_img_slide", {
    spaceBetween:30,
    centeredSlide:true,
    autoplay:{
      delay:3000,
      disableOnInteraction:false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });

  var swiper = new Swiper(".mob_img_slide", {
    spaceBetween:30,
    centeredSlide:true,
    autoplay:{
      delay:3000,
      disableOnInteraction:false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });

</script>
<script>
  var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
      mapOption = {
          center: new kakao.maps.LatLng(35.17065503511062, 129.13732866908424), // 지도의 중심좌표
          level: 5, // 지도의 확대 레벨
          mapTypeId : kakao.maps.MapTypeId.ROADMAP // 지도종류
      }; 

  // 지도를 생성한다 
  var map = new kakao.maps.Map(mapContainer, mapOption); 

  // 마우스 드래그와 모바일 터치를 이용한 지도 이동을 막는다
  map.setDraggable(false);		

  // 마우스 휠과 모바일 터치를 이용한 지도 확대, 축소를 막는다
  map.setZoomable(false);   

  // 지도에 확대 축소 컨트롤을 생성한다
  var zoomControl = new kakao.maps.ZoomControl();

  // 지도의 우측에 확대 축소 컨트롤을 추가한다
  map.addControl(zoomControl, kakao.maps.ControlPosition.RIGHT);

  // 지도에 마커를 생성하고 표시한다
  var marker = new kakao.maps.Marker({
      position: new kakao.maps.LatLng(37.56682, 126.97865), // 마커의 좌표
      map: map // 마커를 표시할 지도 객체
  });

</script>