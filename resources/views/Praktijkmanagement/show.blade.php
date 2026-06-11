<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">{{ $title }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-700">
                <div class="p-6 text-gray-100">
                    <h3>Naam: {{ $user->name ?? $user->Name }}</h3>
                    <p>Email: {{ $user->email ?? $user->Email }}</p>
                    <p>Rol: {{ $user->rolename ?? $user->Rolename }}</p>
                    <a href="{{ route('praktijkmanagement.userroles') }}" class="btn btn-secondary mt-3">Terug</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
