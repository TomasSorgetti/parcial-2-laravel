<x-layouts.main>
    <x-slot:title>Math Spark | {{ $exercise->title }}</x-slot:title>
    <x-slot:description>{{ Str::limit(strip_tags($exercise->statement), 150) }}</x-slot:description>

    <main class="mt-20">

        <section>
            <!-- todo-> create banner -->
            <h1 class="text-4xl md:text-5xl font-bold text-center py-10">
                {{ $exercise->title }}
            </h1>

            <div class="flex justify-center gap-4 text-gray-600">
                <span class="px-3 py-1 bg-gray-100 rounded-xl text-sm border">
                    Difficulty: <strong>{{ ucfirst($exercise->difficulty) }}</strong>
                </span>

                <span class="px-3 py-1 bg-gray-100 rounded-xl text-sm border">
                    Exam Board: <strong>{{ $exercise->exam_board }}</strong>
                </span>
            </div>
        </section>

        <div class="mx-auto container max-w-3xl mt-16">
            <a href="{{ url()->previous() }}"
                class="p-2 text-gray-700 flex items-center gap-2 group hover:text-font-primary">
                <x-elemplus-back class="w-6 h-6 group-hover:-translate-x-2 transition-transform duration-300" />
                Go back
            </a>
        </div>

        <section class="container mx-auto max-w-3xl mt-6 p-8 bg-white shadow-xl border border-black/10 rounded-2xl">

            <div class="">
                <h2 class="text-2xl font-semibold mb-4">Problem Statement</h2>

                <p class="text-lg leading-relaxed">
                    {!! $exercise->statement !!}
                </p>
            </div>

            @if ($exercise->image)
            <div class=" flex justify-center">
                <img src="{{ asset('storage/' . $exercise->image) }}"
                    alt="{{ $exercise->title }}"
                    class="rounded-xl max-h-96 object-contain">
            </div>
            @endif

            {{-- Solution (si se quiere mostrar) --}}
            <div class="my-8">
                <h2 class="text-2xl font-semibold mb-4">Solution</h2>

                <p class="text-lg leading-relaxed">
                    {!! $exercise->solution !!}
                </p>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</x-layouts.main>