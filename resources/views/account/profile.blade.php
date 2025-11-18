<x-layouts.main>
    <x-slot:title>Perfil</x-slot:title>

    <main class="mt-32 container mx-auto max-w-5xl">
        <div class="flex items-start gap-10">

            <div class="mt-10">
                <h1 class="font-bold text-4xl">{{ auth()->user()->username }}</h1>
            </div>
        </div>
    </main>
</x-layouts.main>