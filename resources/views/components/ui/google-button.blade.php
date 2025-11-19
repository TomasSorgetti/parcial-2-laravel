<button type="button" aria-label="Continue with Google" class="w-full cursor-pointer bg-white h-12 flex items-center justify-center gap-2 text-font-primary rounded hover:shadow-xl transition duration-300  border border-black/15 shadow-xs">
    <img src="/icons/google.svg" alt="" aria-hidden="true" class="w-8 h-8">
    {{ $slot ?? 'Continue with Google' }}
</button>