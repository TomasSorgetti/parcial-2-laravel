<x-layouts.main>
    <x-slot:title>Math Spark - Blog</x-slot:title>
    <x-slot:description>Pagina de blog</x-slot:description>

    <main class="my-32 container mx-auto">
        <h1 class="text-3xl font-bold">Blog page</h1>
        <div class="mt-6">
            <form>
                <input type="text" name="search" placeholder="Search..." class="bg-white w-full h-11 rounded text-font-primary p-3 border border-black/10 shadow max-w-xs">
            </form>
        </div>

        <section class="my-10 flex flex-wrap gap-4">
            @if ($articles->isEmpty())
            <p>No articles found.</p>
            @else
            @foreach ($articles as $article)
            <!-- todo -> create a card component -->
            <article class="min-h-105 w-full max-w-xs rounded-xl overflow-hidden bg-white shadow flex flex-col justify-between hover:shadow-xl transition-all duration-400">
                <div class="w-full h-1/2">
                    <img src="{{ $article->image }}" alt="{{$article->image}}" class="w-full h-full object-cover">
                </div>
                <div class="px-6 py-4 h-1/2 flex flex-col items-start justify-between">
                    <div>
                        <h2 class="font-semibold text-xl">
                            {{ $article->title }}
                        </h2>
                        <p class="font-light text-base mt-2 text-font-primary/70">{{ $article->summary }}</p>
                    </div>
                    <a href="{{ route('blog.detail', ['slug' => $article->slug]) }}" class="underline font-semibold">Read more</a>
                </div>
            </article>
            @endforeach
            @endif
        </section>
    </main>
</x-layouts.main>