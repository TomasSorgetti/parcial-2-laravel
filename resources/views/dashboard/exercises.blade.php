<x-layouts.main>
    <x-slot:title>Math Spark | Category Exercises</x-slot:title>
    <x-slot:description>Category Exercises</x-slot:description>

    <main class="mt-20">
        <section>
            <h1 class="text-5xl font-semibold text-center py-10">Exercises</h1>
        </section>

        <section class="mx-auto container max-w-7xl mt-16">
            <div>
                <a href="{{ route('welcome') }}"
                    class="p-2 text-gray-700 flex items-center gap-2 group hover:text-font-primary">
                    <x-elemplus-back class="w-6 h-6 group-hover:-translate-x-2 transition-transform duration-300" />
                    Go back
                </a>
            </div>

            @if ($exercises->isEmpty())
            <div class="flex flex-wrap gap-4 mt-20"></div>
            <p>No exercises found.</p>
            </div>

            @else
            <ul class="gap-4 mt-6 grid grid-cols-3">
                @foreach ($exercises as $exercise)
                <li class="col-span-1 bg-white border border-black/5 shadow-xl min-h-55 px-6 py-3 rounded-2xl flex flex-col items-start justify-between">
                    <div>
                        <span class="font-semibold text-primary">{{$exercise->difficulty}}</span>
                        <h2 class="text-xl font-semibold">{{ $exercise->title }}</h2>
                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur nulla quasi quos corrupti reprehenderit quibusdam?</p>
                    </div>
                    <a href="{{ route('exercise', $exercise->slug) }}" class="font-semibold hover:underline">See Exercise</a>
                </li>
                @endforeach
            </ul>
            @endif
        </section>
    </main>
</x-layouts.main>