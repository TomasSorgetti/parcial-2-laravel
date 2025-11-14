<x-layouts.main>
    <x-slot:title>Math Spark | Login Page</x-slot:title>
    <x-slot:description>Login page</x-slot:description>

    <main class="h-full w-full flex items-center justify-center py-32">
        <form action="" class="space-y-4 w-full max-w-112.5 p-4 md:p-8 rounded-2xl text-font-invert bg-cover bg-no-repeat" style="background: url('/images/auth-bg.webp');">
            @csrf
            <div>
                <h1 class="font-bold text-2xl">Register to Math Spark</h1>
                <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <x-ui.google-button>Sign up with Google</x-ui.google-button>

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

            <!-- TODO: create component -->
            <label for="terms" class="flex items-center gap-2 mt-6">
                <input type="checkbox" id="terms" name="terms" class="w-4 h-4">
                <span>Accept terms and conditions</span>
            </label>

            <!-- TODO: create component -->
            <button type="submit" class="w-full mt-6 cursor-pointer bg-primary text-text-invert h-12 flex items-center justify-center gap-2 text-font-invert font-semibold rounded">Sign up</button>
            <p class="text-center">Already have an account? <a href="/register" class="font-semibold">Sign in</a></p>
        </form>
    </main>
</x-layouts.main>