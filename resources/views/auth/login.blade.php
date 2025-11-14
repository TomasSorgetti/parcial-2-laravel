<x-layouts.main>
    <x-slot:title>Math Spark | Login Page</x-slot:title>
    <x-slot:description>Login page</x-slot:description>

    <main class="h-full w-full flex items-center justify-center py-32">
        <form action="{{ route('login') }}" method="POST"
            class="w-full max-w-112.5 p-4 md:p-8 rounded-2xl text-font-invert bg-cover bg-no-repeat"
            style="background: url('/images/auth-bg.webp');">
            @csrf
            <div class="mb-6">
                <h1 class="font-bold text-3xl">Login to Math Spark</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <x-ui.google-button>Sign in with Google</x-ui.google-button>

            <p class="text-center mt-6">or</p>

            <div class="min-h-6 flex items-center justify-center">
                @if(session('login.error'))
                <p class="text-red-500 text-sm text-center">{{ session('login.error') }}</p>
                @endif
            </div>
            <div class="space-y-4 w-full">
                <div class="flex flex-col items-start gap-1 w-full">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email..."
                        class="bg-white w-full h-12 rounded text-font-primary p-2">
                </div>

                <div class="flex flex-col items-start gap-1 w-full">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"
                        placeholder="********"
                        class="bg-white w-full h-12 rounded text-font-primary p-2">
                </div>
            </div>

            <div class="flex items-center justify-between mt-8">
                <label for="remember" class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember" class="w-5 h-5">
                    <span>Remember me</span>
                </label>
                <a href="#" class="">Forgot password?</a>
            </div>

            <button type="submit"
                class="w-full mt-6 cursor-pointer bg-primary text-text-invert h-12 flex items-center justify-center gap-2 text-font-invert font-semibold rounded">
                Sign in
            </button>

            <p class="text-center mt-4">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold">Sign up</a>
            </p>

        </form>
    </main>
</x-layouts.main>