<x-layouts.admin>
    <x-slot:title>Math Spark | Home Page</x-slot:title>
    <x-slot:description>Pagina de Inicio</x-slot:description>

    <main class="mt-32">
        <h1 class="text-3xl font-bold mb-6 text-center">Admin Dashboard Page</h1>

        <div class="mt-20 container mx-auto max-w-4xl bg-white rounded-2xl shadow-xl border border-black/5 p-6">

            <!-- Encabezados -->
            <div class="grid grid-cols-3 font-semibold text-gray-600 border-b pb-3">
                <div>ID</div>
                <div>Email</div>
                <div>Rol</div>
            </div>

            <!-- Usuarios -->
            <div class="divide-y">
                @foreach ($users as $u)
                <div class="grid grid-cols-3 py-4 items-center">
                    <div class="text-gray-800">{{ $u->id }}</div>
                    <div class="text-gray-800">{{ $u->email }}</div>
                    <div class="text-gray-800">{{ $u->role->name }}</div>
                </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $users->links('pagination::tailwind') }}
            </div>

        </div>
    </main>
</x-layouts.admin>