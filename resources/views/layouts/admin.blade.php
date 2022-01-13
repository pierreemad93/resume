<!DOCTYPE html>
<html lang="en">

@include('includes.admin.head')

<body class="page-body">
    <div class="page-container">
        @include('includes.admin.sidebar')
        <div class="main-content">
            @include('includes.admin.navbar')
            <hr />
            @yield('content')
            @include('includes.admin.footer')

        </div>
        @include('includes.admin.scripts')


</body>

</html>
<!-- Localized -->
