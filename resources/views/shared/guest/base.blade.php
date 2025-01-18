<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ Core::lang('ar') ? 'rtl' : 'ltr' }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('shared.base.styles')
    @yield('styles')
    <title>@yield('title')</title>
</head>

<body close class="bg-x-light bg-x-gradient">
    <section id="neo-page-cover">
        <img src="{{ asset('img/logo.webp') }}?v={{ env('APP_VERSION') }}" fetchpriority="high"
            alt="{{ env('APP_NAME') }} logo image" class="block w-36" />
    </section>
    <neo-wrapper class="flex flex-col gap-10">
        @include('shared.guest.header')
        <main class="flex flex-col gap-20">
            @yield('content')
        </main>
        @include('shared.guest.footer')
    </neo-wrapper>
    <neo-toaster horisontal="end" vertical="start" class="full-size"></neo-toaster>
    @include('shared.base.scripts')
    @yield('scripts')
</body>

</html>
