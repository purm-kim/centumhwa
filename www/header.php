

<!-- 로고 및 gnb 시작 -->
<header id="header">
  <div class="logo_title">

    <a href="tel:0517108253" class="call_btn">
      <img src="/img/common/icon_call.png" alt="">
    </a>

    <a href="/" class="img_wrap">
      <img src="/img/common/logo_color.png" alt="">
    </a>

    <div href="" class="mainmenu">
      <img src="/img/common/icon_mainmenu.png" alt="">
    </div>
  </div>

  <div class="gnb">
    <ul class="depth1">
      <li class="depth1_01">
        <a href="">병원소개</a>
        <ul class="depth2">
          <li><a href="/doctor">의료진 소개</a></li>
          <li><a href="/announce">진료 및 입원안내</a></li>
          <li><a href="/location">오시는 길</a></li>
          <li><a href="/lookaround">병원 둘러보기</a></li>
        </ul>
      </li>
      <li class="depth1_02">
        <a href="">화상 클리닉</a>
        <ul class="depth2">
          <li><a href="/burn">급성화상</a></li>
          <li><a href="/treatment">화상치료</a></li>
          <li><a href="/babyburn">소아화상</a></li>
        </ul>
      </li>
      <li class="depth1_03">
        <a href="">피부 클리닉</a>
        <ul class="depth2">
          <li><a href="/colorlaser">색소레이저</a></li>
          <li><a href="/shrink">슈링크</a></li>
          <li><a href="/massage">피부재활 마사지</a></li>
          <li><a href="/medicalcare">메디컬 케어</a></li>
          <li><a href="/votox">보톡스</a></li>
        </ul>
      </li>
      <li class="depth1_04">
        <a href="">메디컬 클리닉</a>
        <ul class="depth2">
          <li><a href="/lipoma">지방종/피지낭종</a></li>
          <li><a href="/suture">열상봉합</a></li>
        </ul>
      </li>
      <li class="depth1_05">
        <a href="/healthclinic">건강클리닉</a>
        <ul class="depth2">
          <li><a href="/healthclinic">힐링수액</a></li>
        </ul>
      </li>
      <li class="depth1_06">
        <a href="">커뮤니티</a>
        <ul class="depth2">
          <li><a href="/notice">공지사항</a></li>
          <li><a href="/community">비급여안내</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <div class="gnb_mob">
    <div class="close_btn">
      <img src="/img/common/icon_close.png" alt="">
    </div>
    <ul class="depth1">
      <li>병원소개
        <ul class="depth2">
          <li><a href="/doctor">의료진 소개</a></li>
          <li><a href="/announce">진료 및 입원안내</a></li>
          <li><a href="/location">오시는 길</a></li>
          <li><a href="/lookaround">병원 둘러보기</a></li>
        </ul>
      </li>
      <li>화상 클리닉
        <ul class="depth2">
          <li><a href="/burn">급성화상</a></li>
          <li><a href="/treatment">화상치료</a></li>
          <li><a href="/babyburn">소아화상</a></li>
        </ul>
      </li>
      <li>피부 클리닉
        <ul class="depth2">
          <li><a href="/colorlaser">색소레이저</a></li>
          <li><a href="/shrink">슈링크</a></li>
          <li><a href="/massage">피부재활 마사지</a></li>
          <li><a href="/medicalcare">메디컬 케어</a></li>
          <li><a href="/votox">보톡스</a></li>
        </ul>
      </li>
      <li>메디컬 클리닉
        <ul class="depth2">
          <li><a href="/lipoma">지방종/피지낭종</a></li>
          <li><a href="/suture">열상봉합</a></li>
        </ul>
      </li>
      <li>건강클리닉
        <ul class="depth2">
          <li><a href="/healthclinic">힐링수액</a></li>
        </ul>
      </li>
      <li>커뮤니티
        <ul class="depth2">
          <li><a href="/notice">공지사항</a></li>
          <li><a href="/community">비급여안내</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_bg"></div>

</header>
<!-- 로고 및 gnb 끝 -->



<script>
  // pc gnb
  $(".gnb li").hover(function() {
    $(this).children("ul").stop().slideToggle(300)
  });

  // mob gnb 햄버거 터치 보이기
  $(function(){
      $(".mainmenu").on('click' , function(){  
      $('.gnb_mob').toggleClass('active');
      $('.menu_bg').show();
    });

      $('.close_btn').on('click' , function(){
      $('.gnb_mob').toggleClass('active');
      $('.menu_bg').hide();
	  });
  });

  // mob gnb depth1 터치시 depth2 보이기
  $('.gnb_mob li').click(function(){
    $('.depth2').slideUp();
    if ($(this).children('.depth2').is(':hidden')){
        $(this).children('.depth2').slideDown();
    }
    else{
    $(this).children('.depth2').slideUp();
        }
      });

</script>