<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Libraries -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
          integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!-- Scripts -->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/css/front.css']); ?>

  <!-- Styles -->
  <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>
  <main>
    <nav class="container relative my-4 lg:my-10">
      <div class="flex flex-col justify-between w-full lg:flex-row lg:items-center">
        <!-- Logo & Toggler Button here -->
        <div class="flex items-center justify-between">
          <!-- LOGO -->
          <a href="<?php echo e(route('front.index')); ?>">
            <img src="/svgs/logo.svg" alt="stream" />
          </a>
          <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
          <div class="block lg:hidden">
            <button class="p-1 outline-none mobileMenuButton" id="navbarToggler" data-target="#navigation">
              <svg class="text-dark w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                   xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- Nav Menu -->
        <div class="hidden w-full lg:block" id="navigation">
          <div class="flex flex-col items-baseline gap-4 mt-6 lg:justify-between lg:flex-row lg:items-center lg:mt-0">
            <div class="flex flex-col w-full ml-auto lg:w-auto gap-4 lg:gap-[50px] lg:items-center lg:flex-row">
              <a href="#!" class="nav-link-item">Landing</a>
              <a href="#!" class="nav-link-item">Catalog</a>
              <a href="#!" class="nav-link-item">Benefits</a>
              <a href="#!" class="nav-link-item">Stories</a>
              <a href="#!" class="nav-link-item">Maps</a>
            </div>
            <?php if(auth()->guard()->check()): ?>
              <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                  <?php echo csrf_field(); ?>
                  <a href="<?php echo e(route('logout')); ?>" class="btn-secondary"
                     onclick="event.preventDefault();
                  this.closest('form').submit();">
                    Log Out
                  </a>
                </form>
              </div>
            <?php else: ?>
              <div class="flex flex-col w-full ml-auto lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                <a href="<?php echo e(route('login')); ?>" class="btn-secondary">
                  Log In
                </a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>

    <?php echo e($slot); ?>

  </main>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true,
      duration: 300,
      easing: 'ease-out'
    });
  </script>

  <script src="<?php echo e(url('js/script.js')); ?>"></script>

</body>

</html><?php /**PATH C:\laragon\www\vrom_AhmadRidhoniBaru\resources\views/layouts/front.blade.php ENDPATH**/ ?>