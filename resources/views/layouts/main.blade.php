<!DOCTYPE html>
<html lang="en">

@include ('layouts.head')

@include ('layouts.top-bar')

@yield ('content')

@include('layouts.footer')

@include('layouts.js')

@stack('script')

</body>
</html>
