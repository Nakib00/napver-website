{{-- Include Head --}}
@include('website.include.head')

{{-- Include Nav and logo --}}
@include('website.include.nav')

<div>
    @yield('content')
</div>

{{-- Include Footer --}}
@include('website.include.footer')
