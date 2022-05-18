<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
       <!--レスポンシブ対応-->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
       <!-- Bootstrap4の読み込み -->    
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
        
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>