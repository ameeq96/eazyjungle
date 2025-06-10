<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('includes._head')
</head>

<body>

    @include('includes._header')

    <div class="body_wrap">

        @yield('content')

    </div>

    @include('includes._footer')

    @yield('script')

    </div>
</body>

</html>
