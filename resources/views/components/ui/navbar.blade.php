<header class="fixed z-90 top-0 left-0 w-full bg-tertiary">
    <nav class="container mx-auto flex items-center justify-between p-4 lg:px-0">
        <a
            href="<?= route('home'); ?>"
            class="text-2xl font-bold text-font-invert">
            Math Spark
        </a>

        <ul class="flex flex-col gap-8 lg:flex-row">
            <li>
                <x-ui.nav-link to="home">Home</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="welcome">Students</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="welcome">Teachers</x-ui.nav-link>
            </li>
            <li>
                <x-ui.nav-link to="welcome">Blog</x-ui.nav-link>
            </li>
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