<a
    href="<?= route($to); ?>"
    class=" {{request()->routeIs($to) ? 'text-font-primary font-bold' : 'text-font-primary font-light'}}"
    {!! request()->routeIs($to) ? 'aria-current="page"' : '' !!}
    >
    {{ $slot }}
</a>