<div class="relative">
    <button id="authDropdownButton" class="px-4 py-2 text-font-primary font-semibold cursor-pointer flex items-center gap-2">
        <div class="w-8 h-8 rounded-full overflow-hidden">
            <img src="{{ auth()->user()->avatar ?? '/images/default-avatar.png' }}" alt="" draggable="false" loading="lazy" class="w-full h-full object-cover">
        </div>
        {{ auth()->user()->username }}
    </button>
    <ul id="authDropdownMenu" class="absolute top-12 right-0 min-w-40 bg-white text-black rounded hidden flex-col gap-4 shadow-xl border border-black/10">
        @if(auth()->check() && auth()->user()->role?->name === 'admin')
        <li>
            <a href="{{ route('admin.dashboard') }}" class="w-full py-2 block hover:bg-black/5 px-4">Admin Dashboard</a>
        </li>
        @endif
        <li><a href="{{ route('profile') }}" class="w-full py-2 block hover:bg-black/5 px-4">Profile</a></li>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="cursor-pointer py-2 hover:text-red-500 px-4">Cerrar Sesión</button>
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