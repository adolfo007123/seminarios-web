<!DOCTYPE html>
<html lang="en">
 <head>
   @include('layouts.head')
 </head>
 <body>
  @include('layouts.navAdmin')
@yield('content')
@include('layouts.footer')
@include('layouts.modal')
@include('layouts.aviso')
 </body>
</html>