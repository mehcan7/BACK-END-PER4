<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">{{ $title }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-700">
                <div class="p-6 text-gray-100">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('praktijkmanagement.update', $user->Id ?? $user->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="InputName" class="form-label text-gray-100">Naam</label>
                            <input name="name" type="text" class="form-control bg-gray-900 text-gray-100 border-gray-600" id="InputName" value="{{ old('name', $user->name ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="InputEmail" class="form-label text-gray-100">Email</label>
                            <input name="email" type="text" class="form-control bg-gray-900 text-gray-100 border-gray-600" id="InputEmail" value="{{ old('email', $user->email ?? '') }}">
                        </div>

                        <div class="mb-3">
                            <label for="InputRolename" class="form-label text-gray-100">Gebruikersrol</label>
                            <select name="rolename" class="form-select bg-gray-900 text-gray-100 border-gray-600" id="InputRolename">
                                @foreach ($userroles as $urole)
                                    <option value="{{ $urole->rolename ?? $urole->rolename }}" {{ (old('rolename', $user->rolename ?? '') == ($urole->rolename ?? $urole->rolename)) ? 'selected' : '' }}>{{ $urole->rolename ?? $urole->rolename }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Opslaan</button>
                        <a href="{{ route('praktijkmanagement.userroles') }}" class="btn btn-secondary">Annuleren</a>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
