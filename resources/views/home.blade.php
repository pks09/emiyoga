@extends('layouts.public')

@section('content')
    {{-- Временная заглушка главной: контент будет импортирован на Этапе 5 (T5.1) --}}
    <section class="mx-auto max-w-[var(--container)] px-4 py-20 text-center">
        <h1 class="text-4xl font-bold text-ink md:text-5xl">
            Онлайн-школа Йоги<br>
            <span class="text-primary">Эмоционального Интеллекта</span>
        </h1>
        <p class="mx-auto mt-6 max-w-xl text-lg text-muted">
            Сайт находится в разработке. Панель управления: <a href="{{ url('/admin') }}">/admin</a>
        </p>
    </section>
@endsection
