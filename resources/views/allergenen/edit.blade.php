<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-gray-700">
                <div class="p-6 text-gray-100">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('allergeen.update', $allergeen->Id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="naam" class="form-label text-gray-100">Naam</label>
                            <input type="text" id="naam" name="naam" class="form-control"
                                value="{{ old('naam', $allergeen->Naam) }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="omschrijving" class="form-label text-gray-100">Omschrijving</label>
                            <input type="text" id="omschrijving" name="omschrijving" class="form-control"
                                value="{{ old('omschrijving', $allergeen->Omschrijving) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Opslaan</button>
                        <a href="{{ route('allergeen.index') }}" class="btn btn-secondary">Annuleren</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
