<x-layouts.main>
    <x-slot:title>Math Spark | Exercises</x-slot:title>
    <x-slot:description>Exercises</x-slot:description>

    <main class="mt-20">
        <!-- todo-> create banner -->
        <section>
            <h1 class="text-5xl font-semibold text-center py-20">Categories page</h1>
        </section>

        <ul class="container max-w-4xl mx-auto flex flex-wrap gap-4 my-20">
            @foreach ($categories as $category)
            <!-- todo -> make component -->
            <li class="w-[calc(50%-1.5rem)] rounded-2xl border border-black/5 shadow min-h-55 px-6 py-3 flex flex-col items-start justify-between">
                <div>
                    <p class="font-bold text-lg text-primary">
                        0 / {{$category->exercises_count}}
                        <span class="text-font-primary/60 text-sm">Exercises completed</span>
                    </p>
                    <h2 class="text-xl font-semibold">{{ $category->name }}</h2>
                </div>
                <p class="max-w-md">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium dicta inventore aliquid praesentium unde.</p>
                <a href="{{ route('exercises', $category->slug) }}" class="font-semibold hover:underline">See all exercises</a>
            </li>

            @endforeach
        </ul>
    </main>
</x-layouts.main>