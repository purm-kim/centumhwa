
  <!-- 서브탑 시작 -->
  <section class="sub_style bg01">
    <div class="sub_top">
      <div class="sub_top_txt">
        <h1 class="h1 strong">병원 둘러보기</h1>
        <em class="em">외과전문의의 체계적인 진료</em>
      </div>
    </div>
    
  </section>
  <!-- 서브탑 끝 -->

  <!-- 이미지 슬라이드 시작 -->
  <section class="sub_style">
    <div class="w-1200">
      <div class="swiper intro_img_slide">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide01.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide02.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide03.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide04.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide05.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide06.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide07.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide08.png" alt="">
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div thumbsSlider="" class="swiper thumb_slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide01.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide02.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide03.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide04.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide05.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide06.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide07.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/img/sub/intro04_slide08.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 이미지 슬라이드 끝 -->


  <!-- swiper -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>

    //이미지 슬라이드
    var swiper = new Swiper(".thumb_slider", {
        slidesPerView:4,
        spaceBetween: 10,
        freeMode: true,
        watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".intro_img_slide", {
        spaceBetween: 10,
        autoplay:{
          delay:3000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        thumbs: {
          swiper: swiper,
        },
      });
  </script>