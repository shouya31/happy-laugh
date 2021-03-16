<footer>
  <div class="flex flex-col items-center border-double border-b-4 lg:border-none py-4 lg:py-16">
    <div class="text-md lg:text-xl font-bold tracking-widest">ハピラフ</div>
    <div class="text-2xl lg:text-4xl font-black tracking-widest">MAGAZINE</div>
  </div>
  <!-- PC版 -->
  <div class="hidden lg:flex justify-center divide-x divide-black mb-12">
    <a class="px-4">コスメ</a>
    <a class="px-4">占い・恋愛</a>
    <a class="px-4">ファッション</a>
    <a class="px-4">ライフスタイル</a>
    <a class="px-4">アカウント一覧</a>
  </div>
  <div class="hidden lg:flex justify-center mb-16">
    <a class="px-4">ABOUT</a>
    <a class="px-4">WRITER</a>
    <a class="px-4">運営会社</a>
    <a class="px-4">プライバシーポリシー</a>
  </div>
  <!-- /PC版 -->

  <!-- SP版 -->
  <div class="grid grid-cols-2 pt-8 pb-4 lg:hidden">
    <div class="pl-8">
      <div class="mb-4">Pages</div>
      <div class="text-xs text-gray-400 mb-3">ABOUT</div>
      <div class="text-xs text-gray-400 mb-3">Writer</div>
      <div class="text-xs text-gray-400 mb-3">運営会社</div>
      <div class="text-xs text-gray-400">プライバシーポリシー</div>
    </div>
    <div class="pl-8">
      <div class="mb-4">Categories</div>
      <div class="text-xs text-gray-400 mb-3">コスメ</div>
      <div class="text-xs text-gray-400 mb-3">占い・恋愛</div>
      <div class="text-xs text-gray-400 mb-3">ファッション</div>
      <div class="text-xs text-gray-400 mb-3">ライフスタイル</div>
      <div class="text-xs text-gray-400 mb-3">アカウント一覧</div>
    </div>
  </div>
  <!-- /SP版 -->
  <div class="text-white text-center bg-black">© 2021 ハピラフ</div>
</footer>
    <!-- Footerここまで -->
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',
      spaceBetween: 30,
		loop: true,
		centeredSlides: true,
		pagination: '.swiper-pagination',
		autoplay: 1500,
        disableOnInteraction: false,
    });
  </script>
</html>
