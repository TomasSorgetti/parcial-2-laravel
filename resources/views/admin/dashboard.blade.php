<x-layouts.admin>
    <x-slot:title>Math Spark | Home Page</x-slot:title>
    <x-slot:description>Pagina de Inicio</x-slot:description>

    <main class="my-32 container mx-auto max-w-4xl">
        <h1 class="text-3xl font-bold">Admin Dashboard Page</h1>

        <div class="mt-12 flex items-center justify-between">
            <form>
                <input type="text" name="search" placeholder="Search..." class="bg-white w-full h-11 rounded text-font-primary p-3 border border-black/10 shadow max-w-xs">
            </form>
            <button type="button" class="p-2 bg-font-primary rounded cursor-pointer">
                <x-ri-order-play-fill class="w-6 h-6 text-white" />
            </button>
        </div>

        <div class="mt-6 bg-white rounded-2xl shadow-xl border border-black/5 p-6">
            <div class="grid grid-cols-10 font-semibold border-b pb-3">
                <div class="col-span-3 flex items-center justify-left">ID</div>
                <div class="col-span-3 flex items-center justify-center">Email</div>
                <div class="col-span-3 flex items-center justify-center">Role</div>
                <div class="col-span-1"></div>
            </div>

            <div class="divide-y">
                @foreach ($users as $user)
                <div class="grid grid-cols-10 py-4">
                    <div class="text-gray-800 col-span-3 flex items-center justify-left">{{ $user->id }}</div>
                    <div class="text-gray-800 col-span-3 flex items-center justify-center">{{ $user->email }}</div>
                    <div class="text-gray-800 col-span-3 flex items-center justify-center">{{ $user->role->name }}</div>

                    <div class="flex items-end justify-end col-span-1">
                        <button class="p-1 hover:bg-red-50 rounded-lg">
                            <x-bx-block class="w-6 h-6 text-red-500" />
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $users->links('pagination::tailwind') }}
            </div>

        </div>
    </main>
</x-layouts.admin>