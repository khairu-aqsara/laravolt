<!DOCTYPE html>
<html data-font-size="{{ config('laravolt.ui.font_size') }}">
<head>
    <title>@yield('site.title', "Welcome Home") | {{ config('app.name') }}</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    @stack('meta')

    <link rel="stylesheet" type="text/css" href="{{ mix('semantic/semantic.min.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css', 'laravolt') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}"/>
    @stack('style')
    @stack('head')
    {!! Assets::group('laravolt')->css() !!}
    {!! Assets::css() !!}

    <script src="{{ mix('js/vendor.js', 'laravolt') }}"></script>

    <script>
        $.fn.calendar.settings.text = @json(form_calendar_text());
    </script>

    <script defer src="{{ mix('js/platform.js', 'laravolt') }}"></script>
    {!! Assets::group('laravolt')->js() !!}

    <script>
        Turbolinks.start();
    </script>

</head>

<body id="body" data-theme="{{ config('laravolt.ui.theme') }}" login-theme="{{ config('laravolt.ui.login_theme') }}" class="{{ $bodyClass ?? '' }}">

@yield('body')

{!! Assets::js() !!}
@stack('script')
@stack('body')
</body>
</html>
