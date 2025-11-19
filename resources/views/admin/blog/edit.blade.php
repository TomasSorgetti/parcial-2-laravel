<x-layouts.admin>
    <x-slot:title>Edit Post</x-slot:title>

    <main class="my-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">
            Edit Article: {{ $article->title }}
        </h1>

        <form action="{{ route('admin.blog.update', $article->id) }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="block font-semibold">Title</label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $article->title) }}"
                    class="w-full border p-2 rounded"
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
                    value="{{ old('slug', $article->slug) }}"
                    class="w-full border p-2 rounded"
                    required>
                @error('slug')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Summary</label>
                <textarea
                    name="summary"
                    class="w-full border p-2 rounded"
                    rows="3">{{ old('summary', $article->summary) }}</textarea>
                @error('summary')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="content" class="block font-semibold">Content</label>
                <textarea
                    name="content"
                    class="w-full border p-2 rounded"
                    rows="10"
                    required>{!! old('content', $article->content) !!}</textarea>
                @error('content')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-semibold">Image</label>

                @if ($article->image)
                <p class="mb-2 text-sm">Current image:</p>
                <img id="current-image"
                    src="{{ asset($article->image) }}"
                    class="w-32 rounded mb-3 border">
                @endif

                <input
                    type="file"
                    name="image"
                    accept="image/*"
                    class="w-full"
                    onchange="previewImage(event)">
                @error('image')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror

                <div class="mt-4">
                    <img id="image-preview"
                        class="hidden w-32 rounded border shadow">
                </div>
            </div>

            <button
                type="submit"
                class="w-full py-3 bg-font-primary text-white rounded transition cursor-pointer">
                Update Article
            </button>
        </form>

    </main>

    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('image-preview');
            const current = document.getElementById('current-image');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.classList.remove('hidden');

                if (current) {
                    current.classList.add('hidden');
                }
            }
        }
    </script>

</x-layouts.admin>
