<x-layouts.admin>
    <x-slot:title>Crear Artículo</x-slot:title>

    <main class="my-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">Create new Category</h1>

        <form action="{{ route('admin.categories.create') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block font-semibold">Name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border p-2 rounded"
                    placeholder="Category name...">
                @error('name')
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
                    placeholder="category-slug">
                @error('slug')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block font-semibold">Description</label>
                <textarea
                    id="description"
                    name="description"
                    class="w-full border p-2 rounded h-30 resize-none"
                    rows="10"
                    placeholder="Category description...">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full py-3 font-semibold cursor-pointer bg-font-primary text-white rounded transition">
                Create Category
            </button>
        </form>

    </main>

</x-layouts.admin>