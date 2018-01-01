<!DOCTYPE html>
<html lang="en">

@include('website.component.head')

<body>
<!-- Header Start -->
@include('website.component.header')
<!-- Header End -->

    @yield('content')

<!-- Footer Start-->
@include('website.component.footer')
<!-- Footer End-->

@include('website.component.sub-footer')


@include('website.component.scripts')
</body>

</html>