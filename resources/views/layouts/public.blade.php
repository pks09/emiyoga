<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Эми-Йога — Онлайн-школа Йоги Эмоционального Интеллекта')</title>
    <meta name="description" content="@yield('meta_description', '')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col">

    <header class="border-b border-[var(--c-border)] bg-white/95 backdrop-blur sticky top-0 z-40">
        <div class="mx-auto flex h-16 max-w-[var(--container)] items-center justify-between px-4">
            <a href="{{ url('/') }}" class="text-lg font-semibold text-ink hover:text-ink">
                <span class="text-primary">Эми</span>-Йога
            </a>

            {{-- Навигация: на Этапе 1 будет рендериться из модели Menu --}}
            <nav class="hidden gap-6 text-sm md:flex">
                <a href="{{ url('/program') }}">Программа</a>
                <a href="{{ url('/schedule') }}">Расписание</a>
                <a href="{{ url('/blog') }}">Блог</a>
                <a href="{{ url('/books') }}">Книги</a>
            </nav>
        </div>
    </header>

    <main class="flex-1">
        @yield('content')
    </main>

    <footer class="mt-16 bg-[var(--c-bg-soft)] py-10 text-sm text-muted">
        <div class="mx-auto max-w-[var(--container)] px-4 grid gap-6 md:grid-cols-3">
            <div>
                <div class="font-semibold text-ink">Онлайн-школа Йоги Эмоционального Интеллекта</div>
                <div class="mt-2">Автор — Поносов С. В.</div>
            </div>
            <div>
                {{-- Контакты: на Этапе 1 будут из настроек сайта (T1.3) --}}
                <div class="font-semibold text-ink">Контакты</div>
                <ul class="mt-2 space-y-1">
                    <li><a href="mailto:info@emi-yoga.ru">info@emi-yoga.ru</a></li>
                </ul>
            </div>
            <div>
                {{-- Юридические документы хостятся в АВО (см. PLAN.md) --}}
                <div class="font-semibold text-ink">Документы</div>
                <ul class="mt-2 space-y-1">
                    <li><a href="https://emi-yoga.autoweboffice.ru/document/view/privacypolicy" rel="nofollow">Политика конфиденциальности</a></li>
                    <li><a href="https://emi-yoga.autoweboffice.ru/document/view/publicoffer" rel="nofollow">Публичный договор</a></li>
                    <li><a href="https://emi-yoga.autoweboffice.ru/document/view/personaldata" rel="nofollow">Согласие на обработку персональных данных</a></li>
                </ul>
            </div>
        </div>
        <div class="mx-auto mt-8 max-w-[var(--container)] px-4 text-xs">
            © {{ date('Y') }} Эми-Йога. Все права защищены.
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
