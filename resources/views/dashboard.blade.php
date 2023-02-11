<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('user.create') }}" class='mb-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                        Crear nuevo usuario
                    </a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr class="bg-gray-800 text-white">
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Correo electrónico</th>
                                <th class="px-4 py-2">Fecha email verificado</th>
                                <th class="px-4 py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr class="bg-gray-100">
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->email_verified_at }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('user.edit', $user->id) }}" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar</a>
                                    </td>
                                </tr>
                            @empty
                                <p>No users</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
