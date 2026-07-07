<?php wp_footer(); ?>
<footer class="border-t border-black/10 bg-[#e0e2db] px-4 py-8 text-sm uppercase sm:px-6 lg:px-8">
  <div class="mx-auto flex max-w-7xl flex-col gap-3 md:flex-row md:items-center md:justify-between">
    <p>© <?php echo esc_html(date('Y')); ?>Trust Studio</p>
    <div class="flex gap-4">
      <a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a>
      <a href="<?php echo esc_url(home_url('/cart')); ?>">Cart</a>
    </div>
  </div>
</footer>
</body>
</html>
