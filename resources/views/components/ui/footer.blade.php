<footer class="relative z-20 pt-12 bg-white border-t border-black/10">
    <div class="container mx-auto">
        <nav class="flex items-start justify-between">
            <a href="{{ route('home') }}" class="font-bold text-4xl min-w-60">Math Spark</a>

            <div class="flex w-full justify-end items-start">

                <div class="w-1/4">
                    <span class="font-semibold text-xl">Navigation</span>
                    <ul class="mt-3 space-y-2">
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
                            <x-ui.nav-link to="welcome">Exercises</x-ui.nav-link>
                        </li>
                        @endauth
                    </ul>
                </div>

                <div class="w-1/4">
                    <span class="font-semibold text-xl">Support</span>
                    <ul class="mt-3 space-y-2">
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">Help</span>
                        </li>
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">Policty</span>
                        </li>
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">Terms and Conditions</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <span class="font-semibold text-xl">Company</span>
                    <ul class="mt-3 space-y-2">
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">contact@mathspark.com</span>
                        </li>
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">+54 9 11 1234 5678</span>
                        </li>
                        <li>
                            <span class="text-font-primary font-light cursor-not-allowed">Argentina, Buenos Aires</span>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <p class="py-6 text-center text-font-primary/80 border-t border-black/10 mt-10">Copyright &copy; 2025</p>
    </div>
</footer>