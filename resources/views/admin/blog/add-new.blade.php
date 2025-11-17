<x-layouts.admin>
    <x-slot:title>Crear Artículo</x-slot:title>

    <main class="mt-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">Crear nuevo artículo</h1>

        <form action="{{ route('admin.blog') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block font-semibold">Título</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    class="w-full border p-2 rounded-lg"
                    required>
                @error('title')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Slug</label>
                <input
                    type="text"
                    name="slug"
                    value="{{ old('slug') }}"
                    class="w-full border p-2 rounded-lg"
                    required>
                @error('slug')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Resumen</label>
                <textarea
                    name="summary"
                    class="w-full border p-2 rounded-lg"
                    rows="3">{{ old('summary') }}</textarea>
                @error('summary')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Contenido</label>
                <textarea
                    name="content"
                    class="w-full border p-2 rounded-lg"
                    rows="10"
                    required>{{ old('content') }}</textarea>
                @error('content')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Imagen (opcional)</label>
                <input type="file" name="image" class="w-full">
                @error('image')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full py-3 bg-font-primary text-white rounded-xl transition">
                Crear artículo
            </button>
        </form>

    </main>
</x-layouts.admin>