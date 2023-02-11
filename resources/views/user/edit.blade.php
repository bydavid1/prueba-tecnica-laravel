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
                        <div class="w-full max-w-sm">
                            <form action="/user/{{ $user->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="mb-6">
                                    <label class="block text-gray-700 font-medium mb-2" for="name">
                                        Nombre
                                    </label>
                                    <input
                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                        type="text" name="name" id="name" value="{{ $user->name }}">
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-medium mb-2" for="email">
                                        Correo electrónico
                                    </label>
                                    <input
                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                        type="email" name="email" id="email" value="{{ $user->email }}">
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-medium mb-2" for="password">
                                        Contraseña
                                    </label>
                                    <input
                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                        type="password" name="password" id="password">
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-medium mb-2" for="password_confirmation">
                                        Confirmar contraseña
                                    </label>
                                    <input
                                        class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
                                        type="password" name="password_confirmation" id="password_confirmation">
                                </div>

                                <div class="flex items-center justify-between">
                                    <div class="flex items-center justify-between">
                                        <x-primary-button>{{ __('Actualizar') }}</x-primary-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
