<x-layouts.main>
    <x-slot:title>Math Spark | Home Page</x-slot:title>
    <x-slot:description>Pagina de Inicio</x-slot:description>

    <main class="mt-16">
        <x-sections.home-banner />

        <!-- todo -> create component -->
        <section class="min-h-screen mx-auto container py-32 flex items-center justify-between">
            <div class="flex flex-col items-start">
                <span class="text-secondary font-bold text-xl">Who We Help</span>
                <h2 class="text-5xl font-semibold max-w-xl">Comprehensive IB Math Resources for Students, Teachers, and Schools</h2>
                <a href="{{ route('welcome') }}" class="flex items-center justify-center mt-8 px-10 py-3 rounded-full text-lg bg-secondary text-font-invert font-semibold">
                    Explore All Resources
                    <x-heroicon-o-arrow-right class="w-6 h-6" />
                </a>
                <div class="mt-20 flex items-center gap-4">
                    <div class="flex items-center">
                        <div class="w-10 h-10 rounded-full bg-gray-300 border border-font-primary"></div>
                        <div class="relative z-10 -translate-x-2 w-10 h-10 rounded-full bg-gray-300 border border-font-primary"></div>
                    </div>
                    <p class="font-light">Built by teachers, trusted by schools.</p>
                </div>
            </div>

            <ol class="w-full max-w-1/2">
                <!-- todo -> create component -->
                <li class="w-full flex flex-col items-start py-6">
                    <div class="relative max-w-sm">
                        <span class="absolute -top-26 -left-26 text-secondary/20 font-bold text-[8rem] select-none">01</span>
                        <h3 class="text-5xl font-semibold">Students</h3>
                        <p class="my-4">Strengthen your IB Math skills with exam-style questions, clear solutions, and guided practice. Build confidence and prepare for your exams.</p>
                        <span class="text-secondary underline font-semibold cursor-not-allowed">Start Practicing</span>
                    </div>
                </li>

                <li class="w-full flex flex-col items-end py-6">
                    <div class="relative max-w-sm">
                        <span class="absolute -top-26 -left-26 text-secondary/20 font-bold text-[8rem] select-none">02</span>
                        <h3 class="text-5xl font-semibold">Tutors</h3>
                        <p class="my-4">Access curated IB Math question sets, mock exams, and tools to make lessons more effective. Help students achieve top results.</p>
                        <span class="text-secondary underline font-semibold cursor-not-allowed">Browse Materials</span>
                    </div>
                </li>

                <li class="w-full flex flex-col items-start py-6">
                    <div class="relative max-w-sm">
                        <span class="absolute -top-26 -left-26 text-secondary/20 font-bold text-[8rem] select-none">03</span>
                        <h3 class="text-5xl font-semibold">Institutions</h3>
                        <p class="my-4">Provide your school with scalable IB Math resources, shared question banks, and tracking tools. Support teachers and students at every level.</p>
                        <span class="text-secondary underline font-semibold cursor-not-allowed">Contact Sales</span>
                    </div>
                </li>

            </ol>
        </section>

        <!-- todo -> create component -->
        <section class="h-[80vh] text-center flex flex-col items-center justify-center gap-8 bg-cover bg-center bg-no-repeat text-font-invert" style="background-image: url('/images/home-banner-bg.webp')">
            <h2 class="font-bold text-7xl max-w-2xl">Ready to Boost IB Math Performance?</h2>
            <p class="max-w-lg text-lg">Get instant access to exam-style exercises, detailed solutions, and curated question sets for every topic—perfect for students, teachers, and schools.</p>
            <x-ui.main-button to="/auth/register" variant="primary" size="lg" dataLabel="Start now with Math Spark">Get Access Now</x-ui.main-button>
        </section>

        <!-- todo -> create component -->
        <section class="py-32">
            <div class="container mx-auto flex gap-20">
                <div class="">
                    <h2 class="text-6xl font-bold">Stay Ahead in <span class="text-primary">IB & IGCSE Math</span></h2>
                    <p class="mt-10 text-lg max-w-md">Receive study tips, new exercises, and exam-focused resources straight to your inbox—ideal for students, teachers, and schools.</p>
                </div>
                <div class="flex items-start flex-1">
                    <form action="#" method="POST" class="space-y-6 w-full max-w-sm mt-22">
                        @csrf
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" id="email" name="email"
                                value="{{ old('email') }}"
                                placeholder="Enter your email..."
                                class="bg-white w-full h-12 rounded-md text-font-primary p-2 border border-black/15 shadow-md">
                        </div>
                        <button type="submit" disabled class="cursor-not-allowed w-full rounded-md text-lg bg-primary hover:bg-primary-hover active:bg-primary-active text-font-invert font-semibold h-12 flex items-center justify-center">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
</x-layouts.main>