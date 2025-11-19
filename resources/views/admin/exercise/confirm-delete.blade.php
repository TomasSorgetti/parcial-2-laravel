<x-layouts.admin>
    <x-slot:title>Delete Exercise</x-slot:title>

    <main class="mt-32 max-w-xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-black/5">

        <h1 class="text-2xl font-bold mb-6 text-center text-red-600">
            Delete Exercise
        </h1>

        <p class="text-gray-700 mb-6 text-center">
            Are you sure you want to delete this exercise?
        </p>

        <div class="bg-gray-100 p-4 rounded mb-6">
            <p><strong>Title:</strong> {{ $exercise->title }}</p>
            <p><strong>Slug:</strong> {{ $exercise->slug }}</p>
            <p><strong>Exam:</strong> {{ $exercise->exam_board }}</p>
        </div>

        <form action="{{ route('admin.exercises.delete', $exercise->id) }}" method="POST" class="flex justify-between">
            @csrf
            @method("DELETE")

            <a href="{{ route('admin.exercises') }}"
                class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">
                Cancel
            </a>

            <button type="submit"
                class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 cursor-pointer">
                Delete
            </button>
        </form>

    </main>
</x-layouts.admin>