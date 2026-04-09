@php
    $titulo = 'Dashboard';
    $colorClase = '';
    $mensajeConsola = '';

    switch ($tipo ?? null) {
        case 'color1':
            $titulo = 'Color1';
            $colorClase = 'bg-red-200 dark:bg-red-900';
            $mensajeConsola = 'Hello from sidebar!-Cambio de color 1';
            break;

        case 'color2':
            $titulo = 'Color2';
            $colorClase = 'bg-blue-200 dark:bg-blue-900';
            $mensajeConsola = 'Hello from sidebar!-Cambio de color 2';
            break;

        case 'color3':
            $titulo = 'Color3';
            $colorClase = 'bg-green-200 dark:bg-green-900';
            $mensajeConsola = 'Hello from sidebar!-Cambio de color 3';
            break;

        case 'color4':
            $titulo = 'Color4';
            $colorClase = 'bg-yellow-200 dark:bg-yellow-900';
            $mensajeConsola = 'Hello from sidebar!-Cambio de color 4';
            break;
    }
@endphp

<x-layouts::app :title="__($titulo)">
    @if (!empty($mensajeConsola))
        <script>
            console.log(@json($mensajeConsola));
        </script>
    @endif

    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl {{ $colorClase }}">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>

        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app>