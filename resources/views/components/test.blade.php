<div class="alert alert-@yield('alert')">
    <div class="alert-title">{{ $title }}</div>
    {{ $slot }}
    @yield('content')
</div>