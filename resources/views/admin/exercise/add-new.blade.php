<x-layouts.admin>
    <x-slot:title>Math Spark | Admin Add New Exercise</x-slot:title>
    <x-slot:description>Admin Add New Exercise</x-slot:description>

    <main class="my-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">Create new Exercise</h1>

        <form action="{{ route('admin.exercises.create') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6">

            @csrf

            <div>
                <label class="font-semibold">Title</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full border p-2 rounded" placeholder="Exercise title...">
                @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Slug</label>
                <input type="text" name="slug" value="{{ old('slug') }}"
                    class="w-full border p-2 rounded" placeholder="exercise-slug">
                @error('slug') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Statement</label>
                <textarea name="statement" rows="5" class="w-full border p-2 rounded"
                    placeholder="Problem text...">{{ old('statement') }}</textarea>
                @error('statement') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Solution</label>
                <textarea name="solution" rows="5" class="w-full border p-2 rounded"
                    placeholder="Solution text...">{{ old('solution') }}</textarea>
                @error('solution') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Difficulty</label>
                <select name="difficulty" class="w-full border p-2 rounded">
                    <option value="easy" {{ old('difficulty')=='easy'?'selected':'' }}>Easy</option>
                    <option value="medium" {{ old('difficulty')=='medium'?'selected':'' }}>Medium</option>
                    <option value="hard" {{ old('difficulty')=='hard'?'selected':'' }}>Hard</option>
                </select>
                @error('difficulty') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Exam Board</label>
                <select name="exam_board" class="w-full border p-2 rounded">
                    <option value="IB" {{ old('exam_board')=='IB' ? 'selected':'' }}>IB</option>
                    <option value="IGCSE" {{ old('exam_board')=='IGCSE' ? 'selected':'' }}>IGCSE</option>
                </select>
                @error('exam_board') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Category</label>
                <select name="category_id" class="w-full border p-2 rounded">
                    @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}"
                        {{ old('category_id') == $cat->id ? 'selected':'' }}>
                        {{ $cat->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="font-semibold">Level</label>
                <select name="level_id" class="w-full border p-2 rounded">
                    @foreach ($levels as $lvl)
                    <option value="{{ $lvl->id }}"
                        {{ old('level_id') == $lvl->id ? 'selected':'' }}>
                        {{ $lvl->name }} ({{ $lvl->exam_board }})
                    </option>
                    @endforeach
                </select>
                @error('level_id') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <label class="flex items-center gap-2">
                <input type="checkbox" name="is_free" value="1" {{ old('is_free')}}>
                <span>Free</span>
            </label>

            <div>
                <label class="font-semibold">Price (USD)</label>
                <input type="number" step="0.01" name="price" class="w-full border p-2 rounded"
                    value="{{ old('price', 10) }}">
                @error('price') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="flex items-center gap-2">
                <input type="checkbox" name="is_published" value="1"
                    {{ old('is_published') ? 'checked' : '' }}>
                <label class="font-semibold">Published</label>
            </div>

            <div>
                <label class="font-semibold">Image (optional)</label>
                <input type="file" name="image" class="w-full border p-2 rounded">
                @error('image') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                class="w-full py-3 font-semibold cursor-pointer bg-font-primary text-white rounded transition">
                Create Exercise
            </button>

        </form>

    </main>
</x-layouts.admin>
