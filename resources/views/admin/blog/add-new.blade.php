<x-layouts.admin>
    <x-slot:title>Crear Artículo</x-slot:title>

    <main class="my-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">Create new Article</h1>

        <form action="{{ route('admin.blog') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block font-semibold">Title</label>
                <input
                    id="title"
                    type="text"
                    name="title"
                    value="{{ old('title') }}"
                    class="w-full border p-2 rounded"
                    placeholder="Your title...">
                @error('title')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block font-semibold">Slug</label>
                <input
                    id="slug"
                    type="text"
                    name="slug"
                    value="{{ old('slug') }}"
                    class="w-full border p-2 rounded"
                    placeholder="your-slug">
                @error('slug')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="summary" class="block font-semibold">Summary</label>
                <textarea
                    id="summary"
                    name="summary"
                    class="w-full border p-2 rounded"
                    placeholder="Your summary..."
                    rows="3">{{ old('summary') }}</textarea>
                @error('summary')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block font-semibold">Content</label>
                <textarea
                    id="content"
                    name="content"
                    class="w-full border p-2 rounded"
                    rows="10"
                    placeholder="Your content...">{{ old('content') }}</textarea>
                @error('content')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block font-semibold">Image</label>
                <input
                    id="image"
                    type="file"
                    name="image"
                    class="w-full"
                    accept="image/*"
                    onchange="previewImage(event)">
                @error('image')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror

                <div class="mt-4">
                    <img id="image-preview"
                        class="hidden w-40 rounded border shadow">
                </div>
            </div>

            <button
                type="submit"
                class="w-full py-3 bg-font-primary text-white rounded transition">
                Create Article
            </button>
        </form>

    </main>

    <script>
        function previewImage(event) {
            const img = document.getElementById('image-preview');
            img.src = URL.createObjectURL(event.target.files[0]);
            img.classList.remove('hidden');
        }
    </script>

</x-layouts.admin>
