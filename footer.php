<footer>
  <div class="flex flex-col items-center border-double border-b-4 lg:border-none py-4 lg:py-16">
    <div class="text-md lg:text-xl font-bold tracking-widest">ハピラフ</div>
    <div class="text-2xl lg:text-4xl font-black tracking-widest">MAGAZINE</div>
  </div>
  <!-- PC版 -->
  <div class="hidden lg:flex justify-center divide-x divide-black mb-12">
    <a href="/category/コスメ" class="px-4">コスメ</a>
    <a href="/category/占い・恋愛" class="px-4">占い・恋愛</a>
    <a href="/category/ファッション" class="px-4">ファッション</a>
    <a href="/category/ライフスタイル" class="px-4">ライフスタイル</a>
    <a href="/category/アカウント一覧" class="px-4">アカウント一覧</a>
  </div>
  <div class="hidden lg:flex justify-center mb-16">
    <a class="px-4">ABOUT</a>
    <a href="/writers" class="px-4">WRITER</a>
    <a class="px-4">運営会社</a>
    <a class="px-4">プライバシーポリシー</a>
  </div>
  <!-- /PC版 -->

  <!-- SP版 -->
  <div class="grid grid-cols-2 pt-8 pb-12 lg:hidden">
    <div class="pl-8">
      <div class="mb-4"><a href=""></a>Pages</div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="">ABOUT</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/writers">Writer</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="">運営会社</a></div>
      <div class="text-xs"><a class="text-gray-400" href="">プライバシーポリシー</a></div>
    </div>
    <div class="pl-8">
      <div class="mb-4">Categories</div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/category/コスメ">コスメ</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/category/占い・恋愛">占い・恋愛</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/category/ファッション">ファッション</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/category/ライフスタイル">ライフスタイル</a></div>
      <div class="text-xs mb-3"><a class="text-gray-400" href="/category/アカウント一覧">アカウント一覧</a></div>
    </div>

  </div>
  <?php get_template_part( 'st-smartfooter-menu' ); //スマホ用フッターメニュー ?>

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
