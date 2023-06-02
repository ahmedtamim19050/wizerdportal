<x-fornt.app>


@switch(setting('site.layout'))
    @case('layouts1')
    <x-layouts.one/>
    @break
    @case('layouts2')
    <x-layouts.two/>
    @break
    @case('layouts3')
    <x-layouts.three/>
    @break
    @case('layouts4')
    <x-layouts.four/>
    @break

    @default
    <x-layouts.one/>
@endswitch

</x-fornt.app>