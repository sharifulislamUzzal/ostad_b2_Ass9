<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')

<body class="layout">
    {{-- navbar start --}}
    @include('layouts.navbar')
    
    {{-- navbar end --}}
    
    {{-- main section start --}}
    
    @yield('contain')
    {{-- main section end --}}

    
    {{-- footer section start --}}
    @include('layouts.footer')
    {{-- footer section end --}}
 
</body>
</html>