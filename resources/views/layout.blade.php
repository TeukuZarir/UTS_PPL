@include('partials.head')

<body class="dark-sidenav">

    @include('partials.sidebar')

    <div class="page-wrapper">

        @include('partials.topbar')

        @yield('content')

        @include('partials.footer')
