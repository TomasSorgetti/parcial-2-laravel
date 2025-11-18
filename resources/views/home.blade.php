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
                <a href="#" class="flex items-center justify-center mt-8 px-10 py-3 rounded-full text-lg bg-secondary text-font-invert font-semibold">
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
                        <a href="#" class="text-secondary underline font-semibold">Start Practicing</a>
                    </div>
                </li>

                <li class="w-full flex flex-col items-end py-6">
                    <div class="relative max-w-sm">
                        <span class="absolute -top-26 -left-26 text-secondary/20 font-bold text-[8rem] select-none">02</span>
                        <h3 class="text-5xl font-semibold">Tutors</h3>
                        <p class="my-4">Access curated IB Math question sets, mock exams, and tools to make lessons more effective. Help students achieve top results.</p>
                        <a href="#" class="text-secondary underline font-semibold">Browse Materials</a>
                    </div>
                </li>

                <li class="w-full flex flex-col items-start py-6">
                    <div class="relative max-w-sm">
                        <span class="absolute -top-26 -left-26 text-secondary/20 font-bold text-[8rem] select-none">03</span>
                        <h3 class="text-5xl font-semibold">Institutions</h3>
                        <p class="my-4">Provide your school with scalable IB Math resources, shared question banks, and tracking tools. Support teachers and students at every level.</p>
                        <a href="#" class="text-secondary underline font-semibold">Contact Sales</a>
                    </div>
                </li>

            </ol>
        </section>
    </main>
</x-layouts.main>
