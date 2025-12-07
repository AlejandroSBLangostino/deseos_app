<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Menú
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">
                <h1 class="text-2xl font-bold mb-4">Listado de menús</h1>

                <ul class="list-disc pl-6">
                    @foreach ($menus as $menu)
                        <li>{{ $menu->title }} ({{ $menu->url }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
