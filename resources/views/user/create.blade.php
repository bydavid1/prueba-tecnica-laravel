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
                    <div class="flex justify-center">
                        <div class="w-full">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="bg-red-600 text-white p-4 rounded mt-4">
                                        <p class="font-bold">Error:</p>
                                        <p>{{ $error }}</p>
                                    </div>
                                @endforeach
                            @endif
                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('user.store') }}" method="post">
                                @csrf

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="name">
                                        Nombre
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="email">
                                        Correo Electrónico
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="password">
                                        Contraseña
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 font-bold mb-2" for="password_confirmation">
                                        Confirmar Contraseña
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" name="password_confirmation" required>
                                </div>

                                <div class="flex items-center justify-between">
                                    <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
