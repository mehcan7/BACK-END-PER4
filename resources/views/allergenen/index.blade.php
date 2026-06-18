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

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
                        </div>
                        <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
                        </div>
                        <meta http-equiv="refresh" content="3;url={{ route('allergeen.index') }}">
                    @endif

                    <a href="{{ route('allergeen.create') }}" class="btn btn-primary my-3">Nieuwe Allergeen</a>

                    <table class="table table-dark table-striped table-bordered align-middle shadow-sm border-gray-700">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                <th>Omschrijving</th>
                                <th class="text-center">Verwijder</th>
                                <th class="text-center">Wijzig</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($allergenen as $allergeen)
                                <tr>
                                    <td>{{ $allergeen->Naam }}</td>
                                    <td>{{ $allergeen->Omschrijving }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('allergeen.destroy', $allergeen->Id) }}" method="POST"
                                            onsubmit="return confirm('Weet je zeker dat je dit allergeen wilt verwijderen?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('allergeen.edit', $allergeen->Id) }}" method="GET">
                                            @csrf
                                            @method('GET')
                                            <button type="submit" class="btn btn-success btn-sm">Wijzig</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-gray-300">Geen allergenen bekend</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
