<x-layouts.main>
    <x-slot:title>Math Spark | Login Page</x-slot:title>
    <x-slot:description>Login page</x-slot:description>

    <main class="h-full w-full flex items-center justify-center py-32">
        <form action="" class="space-y-4 w-full max-w-112.5 p-4 md:p-8 rounded-2xl text-font-invert bg-cover bg-no-repeat" style="background: url('/images/auth-bg.webp');">
            @csrf
            <div>
                <h1 class="font-bold text-2xl">Login to Math Spark</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <x-ui.google-button>Sign in with Google</x-ui.google-button>
            <p class="text-center">or</p>
            <div class="space-y-4 w-full">
                <!-- TODO: create component -->
                <div class="flex flex-col items-start gap-1 w-full">
                    <label for="email" class="">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email..." class="bg-white w-full h-12 rounded text-font-primary p-2">
                </div>

                <!-- TODO: create component -->
                <div lass="flex flex-col items-start gap-1 w-full">
                    <label for="password" class="">Password:</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="********" class="bg-white w-full h-12 rounded text-font-primary p-2">
                </div>
            </div>

            <div class="flex items-center justify-between mt-6">
                <!-- TODO: create component -->
                <label for="remember" class="flex items-center gap-2">
                    <input type="checkbox" id="remember" name="remember" class="w-5 h-5">
                    <span>Remember me</span>
                </label>
                <a href="#" class="">Forgot password?</a>
            </div>

            <!-- TODO: create component -->
            <button type="submit" class="w-full mt-6 bg-primary text-text-invert h-12 flex items-center justify-center gap-2 text-font-invert font-semibold rounded">Sign in</button>
            <p class="text-center">Don't have an account? <a href="/register" class="font-semibold">Sign up</a></p>
        </form>
    </main>
</x-layouts.main>