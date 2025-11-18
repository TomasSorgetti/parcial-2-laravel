<header class="fixed z-90 top-0 left-0 w-full bg-white text-font-primary shadow-xl">
    <nav class="container mx-auto flex items-center justify-between p-4 lg:px-0">
        <a
            href="<?= route('home'); ?>"
            class="text-2xl font-bold text-font-primary">
            Math Spark
        </a>

        <ul class="flex flex-col gap-8 lg:flex-row lg:items-center">
            <li>
                <x-ui.nav-link to="home">Home</x-ui.nav-link>
            </li>
            <li>
                <span class="text-font-primary font-light cursor-not-allowed">Students</span>
            </li>
            <li>
                <span class="text-font-primary font-light cursor-not-allowed">Teachers</span>
            </li>
            <li>
                <x-ui.nav-link to="blog">Blog</x-ui.nav-link>
            </li>
            @auth
            <li>
                <a href="{{ route('welcome') }}" class="py-2 px-6 bg-primary text-font-invert rounded font-semibold">Exercises</a>
            </li>
            @endauth
        </ul>

        <ul class="flex flex-col gap-8 lg:flex-row">
            @auth
            <x-ui.auth-dropdown />
            @else
            <li>
                <x-ui.nav-link to="login">Sign in</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="register">Sign up</x-ui.nav-link>
            </li>
            @endauth
        </ul>
    </nav>
</header>