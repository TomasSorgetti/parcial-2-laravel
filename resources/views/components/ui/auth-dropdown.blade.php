<div class="relative">
    <button id="authDropdownButton" class="px-4 py-2 text-font-invert font-semibold cursor-pointer flex items-center gap-2">
        <div class="w-8 h-8 rounded-full overflow-hidden">
            <img src="{{ auth()->user()->avatar ?? '/images/default-avatar.png' }}" alt="" draggable="false" loading="lazy" class="w-full h-full object-cover">
        </div>
        {{ auth()->user()->username }}
    </button>
    <ul id="authDropdownMenu" class="absolute top-10 right-0 min-w-40 bg-white text-black rounded p-4 hidden flex-col gap-3 shadow-lg">
        @if(auth()->check() && auth()->user()->role?->name === 'admin')
        <li>
            <a href="{{ route('admin.dashboard') }}" class="w-full py-1 block">Dashboard</a>
        </li>
        @endif
        <li><a href="{{ route('welcome') }}" class="w-full py-1 block">Perfil</a></li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="cursor-pointer hover:text-red-500">Cerrar Sesión</button>
            </form>
        </li>
    </ul>
</div>

<script>
    const button = document.getElementById('authDropdownButton');
    const menu = document.getElementById('authDropdownMenu');

    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    document.addEventListener('click', (e) => {
        if (!button.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.add('hidden');
        }
    });
</script>