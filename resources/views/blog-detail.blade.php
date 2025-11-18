<x-layouts.main>
    <x-slot:title>{{ $article->title }} - Constructly</x-slot:title>
    <x-slot:description>{{ $article->summary }}</x-slot:description>

    <main class="container mx-auto max-w-6xl py-16">
        <div class="w-full overflow-auto h-80">
            <img src="{{ $article->image }}" alt="{{$article->image}}" draggable="false" loading="eager" class="w-full h-full object-cover">
        </div>

        <h1 class="text-font-primary text-5xl font-bold mt-10">{{ $article->title }}</h1>

        <div class="prose mt-10">
            {!! $article->content !!}
        </div>

    </main>
</x-layouts.main>
