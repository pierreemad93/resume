<!DOCTYPE html>
<html lang="en">
    @include('includes.resume.head')
<body>
   
    @include('includes.resume.navbar')
    @include('includes.resume.slider')


    @yield('content')

    @include('includes.resume.footer')


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    @include('includes.resume.scripts')

</body>

</html>
