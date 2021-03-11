<footer class="lg:pt-16 h-full lg:h-96 lg:grid lg:grid-cols-3 lg:divide-x lg:divide-graywhite">
      <!-- ここからコンセプト -->
      <div class="flex flex-col items-center border-double lg:border-none border-b-4 pt-12 pb-12">
        <div class="text-xl font-semibold">ハピラフ</div>
        <div class="text-4xl font-black">MAGAZINE</div>
        <div class="text-md text-center text-gray-300 mt-8">
          texttexttexttexttexttexttexttexttext<br>
          texttexttexttexttexttexttext<br>
          texttexttexttexttexttexttexttext<br>
          texttexttexttexttext<br>
          texttexttexttexttexttexttext
        </div>
      </div>
      <!-- コンセプトここまで -->

      <!-- ここからMenu -->
      <div class="hidden lg:block pt-12 pl-8">
        <div class="text-lg font-medium">Menu</div>
        <div class="text-md text-gray-400 mt-2"><a href="/">Home</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="/tag/ranking">Ranking</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="">Categories</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="">Writer</a></div>
      </div>
      <!-- Menuここまで -->

      <!-- ここからCategory -->
      <div class="hidden lg:block pt-12 pl-8">
        <div class="text-lg font-medium">Categories</div>
        <div class="text-md text-gray-400 mt-2"><a href="/category/コスメ">コスメ</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="/category/占い・恋愛">占い・恋愛</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="/category/コスメ">ファッション</a></div>
        <div class="text-md text-gray-400 mt-2"><a href="/category/コスメ">ライフスタイル</a></div>
      </div>
      <!-- Categoryここまで -->
    </footer>
    <!-- Footerここまで -->

    <!-- ここからMoboleFooter -->
    <div class="grid grid-cols-2 pt-8 pb-8 lg:hidden">
      <!-- ここからMobileMenu -->
      <div class="grid-span-1 pl-4">
        <div class="text-xl mb-4">Menu</div>
        <div class="text-base text-gray-500 mb-2">HOME</div>
        <div class="text-base text-gray-500 mb-2">RANKING</div>
      </div>
      <!-- MobileMenuここまで -->
      <!-- ここからMobileCategory -->
      <div class="grid-span-2 pl-4">
        <div class="text-xl mb-4">Categories</div>
        <div class="text-base text-gray-500 mb-2">categoy1</div>
        <div class="text-base text-gray-500 mb-2">categoy2</div>
        <div class="text-base text-gray-500 mb-2">categoy3</div>
        <div class="text-base text-gray-500 mb-2">categoy4</div>
        <div class="text-base text-gray-500 mb-2">categoy5</div>
      </div>
      <!-- MobileCategoryここまで -->
    </div>
    <!-- ここからMoboleFooter -->
    <!-- ここからCopyright -->
    <div class="h-12 bg-black flex items-center pl-8 lg:hidden">
      <div class="text-white">Copyright ©</div>
    </div>
    <!-- Copyrightここまで -->
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
