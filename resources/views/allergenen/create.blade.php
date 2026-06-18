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

                    <form method="POST" action="{{ route('allergeen.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="InputName" class="form-label text-gray-100">Naam</label>
                            <input name="name" type="text" class="form-control" id="InputName" aria-describedby="nameHelp" value="{{ old('name') }}">
                            <div id="nameHelp" class="form-text">Noteer hier de naam van het allergeen</div>
                        </div>

                        <div class="mb-3">
                            <label for="InputDescription" class="form-label text-gray-100">Omschrijving</label>
                            <input name="description" type="text" class="form-control" id="InputDescription" aria-describedby="descriptionHelp" value="{{ old('description') }}">
                            <div id="descriptionHelp" class="form-text">Noteer hier de omschrijving van het allergeen.</div>
                        </div>

                        <button type="submit" class="btn btn-primary">Verzend</button>
                        <a href="{{ route('allergeen.index') }}" class="btn btn-secondary">Annuleren</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
