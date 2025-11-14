<a
    href="<?= route($to); ?>"
    class=" {{request()->routeIs($to) ? 'text-font-invert font-bold' : 'text-font-invert font-light'}}"
    {!! request()->routeIs($to) ? 'aria-current="page"' : '' !!}
    >
    {{ $slot }}
</a>