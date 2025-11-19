<x-layouts.admin>
    <x-slot:title>Math Spark | Blog Page</x-slot:title>
    <x-slot:description>Blog Page</x-slot:description>

    <main class="mt-32 container mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold mb-6 text-center">Admin Levels Page</h1>

        <div class="flex items-center justify-between py-4">
            <form>
                <input type="text" name="search" placeholder="Search..." class="bg-white w-full h-11 rounded text-font-primary p-3 border border-black/10 shadow">
            </form>
            <a href="{{ route('admin.levels.add-new') }}" class="py-2 px-6 bg-font-primary text-font-invert rounded font-semibold">Add New</a>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-black/10 p-6 min-h-120 flex flex-col items-start justify-between">

            @if ($levels->isEmpty())
            <p class="text-center py-10 text-gray-600">
                There are no levels.
                <a href="#" class="font-semibold underline">
                    Create a new one.
                </a>
            </p>
            @else

            <div class="w-full">
                <div class="grid grid-cols-11 font-semibold border-b pb-3">
                    <div class="col-span-4 flex items-center justify-left">Name</div>
                    <div class="col-span-4 flex items-center justify-center">Exam Board</div>
                    <div class="col-span-2 flex items-center justify-center">Created</div>
                    <div class="col-span-1"></div>
                </div>

                <div class="divide-y">
                    @foreach ($levels as $level)
                    <div class="grid grid-cols-11 py-4">

                        <div class="col-span-4 flex items-center justify-left font-semibold">
                            {{ $level->name }}
                        </div>

                        <div class="col-span-4 flex items-center justify-center ">
                            {{ $level->exam_board }}
                        </div>

                        <div class="col-span-2 flex items-center justify-center ">
                            {{ $level->created_at->format('d M Y') }}
                        </div>

                        <div class="flex items-end justify-end col-span-1 gap-2">
                            <a
                                href="{{ route('admin.levels.edit', ['id' => $level->id]) }}"
                                class="p-1 hover:bg-blue-50 rounded-lg">
                                <x-eva-edit class="w-6 h-6 text-font-primary" />
                            </a>

                            <button class="p-1 hover:bg-red-50 rounded-lg">
                                <x-eos-delete class="w-6 h-6 text-red-500" />
                            </button>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
            <div class="mt-6 w-full">
                {{ $levels->links('pagination::tailwind') }}
            </div>

            @endif

        </div>
    </main>
</x-layouts.admin>