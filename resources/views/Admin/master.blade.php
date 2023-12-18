<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:00 GMT -->

@include('Admin.headerlink')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">     
@include('Admin.header') 


     @include('Admin.sidebar')
       @yield('content')

      @include('Admin.footer')

    </div>

@include('Admin.footerlink')
@yield('externaljs')
@include('Admin.alert')

</body>

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Dec 2023 12:39:00 GMT -->

</html>