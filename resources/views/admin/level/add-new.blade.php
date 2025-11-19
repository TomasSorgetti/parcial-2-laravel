<x-layouts.admin>
    <x-slot:title>Create Level</x-slot:title>

    <main class="my-32 max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-3xl font-bold mb-6 text-center">Create Level</h1>

        <form action="{{ route('admin.levels.create') }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6">
            @csrf

            <div>
                <label for="name" class="block font-semibold">Name</label>
                <input
                    id="name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border p-2 rounded"
                    placeholder="Level name...">
                @error('name')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="exam_board" class="block font-semibold">Exam Board</label>

                @php
                $selected = old('exam_board');
                @endphp

                <select
                    name="exam_board"
                    id="exam_board"
                    class="w-full border p-2 rounded"
                    required>

                    <option value="IB" {{ $selected === 'IB' ? 'selected' : '' }}>IB</option>
                    <option value="IGCSE" {{ $selected === 'IGCSE' ? 'selected' : '' }}>IGCSE</option>
                </select>

                @error('exam_board')
                <p class="text-red-600 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                class="w-full py-3 font-semibold cursor-pointer bg-font-primary text-white rounded transition">
                Create Level
            </button>
        </form>

    </main>

</x-layouts.admin>
