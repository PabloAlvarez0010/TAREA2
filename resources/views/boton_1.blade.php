<x-layouts::app :title="__('Boton_1')">
    <div class="grid h-full w-full flex-1 gap-4 lg:grid-cols-4">
        <aside class="relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 lg:col-span-1">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </aside>

        <section class="flex min-h-0 flex-1 flex-col gap-4 lg:col-span-3">
            <div class="grid auto-rows-min gap-4 sm:grid-cols-2">
                <div class="relative h-32 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
                <div class="relative h-32 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </div>

            <div class="grid min-h-0 flex-1 gap-4 xl:grid-cols-3">
                <div class="relative min-h-64 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 xl:col-span-2">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
                <div class="relative min-h-64 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                </div>
            </div>
        </section>
    </div>
</x-layouts::app>
