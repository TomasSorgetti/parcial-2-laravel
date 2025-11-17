<x-layouts.admin>
    <x-slot:title>Math Spark | Blog Page</x-slot:title>
    <x-slot:description>Blog Page</x-slot:description>

    <main class="mt-32 container mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold mb-6 text-center">Admin Blog Page</h1>

        <div class="flex items-center justify-between py-4">
            <form>
                <input type="text" name="search" placeholder="Search..." class="bg-white w-full h-11 rounded text-font-primary p-3 border border-black/10 shadow">
            </form>
            <a href="{{ route('admin.blog.create') }}" class="py-2 px-6 bg-font-primary text-font-invert rounded font-semibold">Add New</a>
        </div>

        <div class="bg-white rounded-2xl shadow-xl border border-black/10 p-6 min-h-120 flex flex-col items-start justify-between">

            @if ($articles->isEmpty())
            <p class="text-center py-10 text-gray-600">
                There are no blog posts.
                <a href="{{ route('admin.blog.create') }}" class="font-semibold underline">
                    Create a new one.
                </a>
            </p>
            @else

            <div class="w-full">
                <div class="grid grid-cols-11 font-semibold border-b pb-3">
                    <div class="col-span-4 flex items-center justify-left">Title</div>
                    <div class="col-span-3 flex items-center justify-center">Slug</div>
                    <div class="col-span-2 flex items-center justify-center">Created</div>
                    <div class="col-span-1 flex items-center justify-center">Visits</div>
                    <div class="col-span-1"></div>
                </div>

                <div class="divide-y">
                    @foreach ($articles as $article)
                    <div class="grid grid-cols-11 py-4">

                        <div class="col-span-4 flex items-center justify-left font-semibold">
                            {{ $article->title }}
                        </div>

                        <div class="col-span-3 flex items-center justify-center ">
                            {{ $article->slug }}
                        </div>

                        <div class="col-span-2 flex items-center justify-center ">
                            {{ $article->created_at->format('d M Y') }}
                        </div>

                        <div class="col-span-1 flex items-center justify-center ">
                            0
                        </div>

                        <div class="flex items-end justify-end col-span-1 gap-2">
                            <a
                                href="{{ route('admin.blog.edit', $article->slug) }}"
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
                {{ $articles->links('pagination::tailwind') }}
            </div>

            @endif

        </div>
    </main>
</x-layouts.admin>