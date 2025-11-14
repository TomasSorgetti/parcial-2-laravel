<x-layouts.main>
    <x-slot:title>Math Spark | Register Page</x-slot:title>
    <x-slot:description>Create an account</x-slot:description>

    <main class="h-full w-full flex items-center justify-center py-32">
        <form action="{{ route('register') }}"
            method="POST"
            class="space-y-4 w-full max-w-112.5 p-4 md:p-8 rounded-2xl text-font-invert bg-cover bg-no-repeat"
            style="background: url('/images/auth-bg.webp');">
            @csrf
            <div>
                <h1 class="font-bold text-3xl">Register to Math Spark</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <x-ui.google-button>Sign up with Google</x-ui.google-button>

            <p class="text-center">or</p>

            <div class="space-y-4 w-full">

                <div class="relative flex flex-col items-start gap-1 w-full">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username"
                        value="{{ old('username') }}"
                        placeholder="Enter your username..."
                        class="bg-white w-full h-12 rounded text-font-primary p-2">
                    @error('username')
                    <p class="text-red-500 text-sm absolute --bottom-5 left-0">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative flex flex-col items-start gap-1 w-full">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email..."
                        class="bg-white w-full h-12 rounded text-font-primary p-2">
                    @error('email')
                    <p class="text-red-500 text-sm absolute -bottom-5 left-0">{{ $message }}</p>
                    @enderror
                </div>

                <div class="relative flex flex-col items-start gap-1 w-full">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password"
                        placeholder="********"
                        class="bg-white w-full h-12 rounded text-font-primary p-2">
                    @error('password')
                    <p class="text-red-500 text-sm absolute --bottom-5 left-0">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit"
                class="w-full mt-6 cursor-pointer bg-primary text-text-invert h-12 flex items-center justify-center gap-2 text-font-invert font-semibold rounded">
                Sign up
            </button>

            <p class="text-center">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold">Sign in</a>
            </p>

        </form>
    </main>
</x-layouts.main>