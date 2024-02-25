<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Soft UI Dashboard Tailwind</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <link href="./assets/css/styles.css?v=1.0.3" rel="stylesheet" />
  </head>

  <body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500">

    @include('layouts.partials.sidebar')
    
    <!-- main -->
    <main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">

    @include('layouts.partials.header')

    <!-- main content region -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- workspace -->
      <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
          <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
              @yield('content')
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
              <div class="p-0 overflow-x-auto min-h-50-screen">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end workspace -->
    </div>
    <!-- end main content region -->

    @include('layouts.partials.footer')

    </main>
    <!-- end main -->

  </body>

  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.3" async></script>
</html>