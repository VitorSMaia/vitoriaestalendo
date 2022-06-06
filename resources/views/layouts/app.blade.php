<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script defer src="{{ asset('js/app.js') }}" ></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/css/splide.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.5.0/dist/js/splide.min.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  @livewireStyles
</head>
<body x-data="{ modal: false }">
    
    <main class="md:mx-60 mb-10">
      @yield('content')
    </main>
    
    <footer class="text-center lg:text-left bg-gray-100 text-gray-600">
      <div class="text-center p-6 bg-gray-200">
        <span>© 2021 Copyright:</span>
        <a class="text-gray-600 font-semibold" href="https://tailwind-elements.com/">Vitoria Esta Lendo</a>
      </div>
    </footer>
    
    @livewire('components.modal')
    @livewireScripts
</body>

<script>
  document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide',{
      type: 'loop',
      autoplay: true,
      perPage: 3,
      perMove: 1,
      pagination: false,
      arrows: false,
      width: '40em',
      padding: '9%',
      focus: 'center',
      snap: true,
      interval: 1000
  } );
    splide.mount();
  } );
</script>
</html>