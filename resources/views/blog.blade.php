<x-layouts.main>
    <x-slot:title>Math Spark - Blog</x-slot:title>
    <x-slot:description>Pagina de blog</x-slot:description>

    <main class="mt-32 container mx-auto">
        <h1 class="text-3xl font-bold">Blog page</h1>
        <div class="mt-6">
            <form>
                <input type="text" name="search" placeholder="Search..." class="bg-white w-full h-11 rounded text-font-primary p-3 border border-black/10 shadow max-w-xs">
            </form>
        </div>

        <section class="mt-10 flex flex-wrap gap-4">
            @foreach ($articles as $article)
            <article class="p-6 min-h-100 w-full max-w-xs rounded-xl bg-white shadow flex flex-col justify-between">
                <div>
                    <h2 class="font-semibold text-xl">
                        {{ $article->title }}
                    </h2>
                    <p class="font-light text-base mt-6">{{ $article->summary }}</p>
                </div>
                <a href="{{ route('blog.detail', ['slug' => $article->slug]) }}" class="underline font-semibold">Read more</a>
            </article>
            @endforeach
        </section>
    </main>
</x-layouts.main>