<x-layouts.main>
    <x-slot:title>{{ $article->title }} - Constructly</x-slot:title>
    <x-slot:description>{{ $article->summary }}</x-slot:description>

    <section class="container mx-auto max-w-6xl py-32">
        <h1 class="text-font-primary text-5xl font-bold">{{ $article->title }}</h1>

        <div class="prose mt-10">
            {!! $article->content !!}
        </div>

    </section>
</x-layouts.main>
