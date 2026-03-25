<x-layouts::app :title="__('Correo_4')">
    @php
        $estudiantes = [
            ['nombre' => 'Ana López', 'edad' => 20, 'carrera' => 'Ingeniería en Sistemas'],
            ['nombre' => 'Carlos Ruiz', 'edad' => 22, 'carrera' => 'Administración'],
            ['nombre' => 'María Gómez', 'edad' => 21, 'carrera' => 'Diseño Gráfico'],
        ];
    @endphp

    <div class="space-y-6">
        <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6">
            <h1 class="text-2xl font-bold">Listado de estudiantes Correo 4</h1>
            <p class="text-sm text-neutral-600 dark:text-neutral-300">
                Vista independiente correspondiente al botón correo4.
            </p>
        </div>

        <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 p-6 overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="border-b border-neutral-300 dark:border-neutral-600">
                        <th class="text-left p-2">Nombre</th>
                        <th class="text-left p-2">Edad</th>
                        <th class="text-left p-2">Carrera</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr class="border-b border-neutral-200 dark:border-neutral-700">
                            <td class="p-2">{{ $estudiante['nombre'] }}</td>
                            <td class="p-2">{{ $estudiante['edad'] }}</td>
                            <td class="p-2">{{ $estudiante['carrera'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts::app>