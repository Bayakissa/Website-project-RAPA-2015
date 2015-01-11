 
<!-- file: app/views/master.blade.php -->
 
@include('header')
 
    @yield('content')
 
@include('footer')
 
<!-- file: app/views/header.blade.php -->
 
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Larave 4 Authentication Tutorial</title>
    {{ HTML::style('assets/css/foundation.css') }}
    {{ HTML::script('./assets/js/vendor/custom.modernizr.js') }}
</head>
<body>
 
<!-- file: app/views/footer.blade.php -->
 
    {{ HTML::script('./assets/js/vendor/jquery.js') }}
    {{ HTML::script('./assets/js/foundation.min.js') }}
    <script>
          $(document).foundation();
    </script>
 
</body>
</html>