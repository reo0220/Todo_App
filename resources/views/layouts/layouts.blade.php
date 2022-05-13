<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <!-- Bootstrap4の読み込み -->    
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
       <div class="header mb-5">
        @component('components.header')
        @endcomponent
        </div>
        
        <div class="container pt-5 pb-5">
           @component('components.flash')
           @endcomponent
           @yield('content')
        </div>
        
        @component('components.footer')
        @endcomponent
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>