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
                    @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Sluiten"></button>
                        </div>
                    @endif

                    <div class="my-3 d-flex gap-3">
                        <!-- optional create button -->
                    </div>

                    <div class="container d-flex justify-content-center">
                        <div class="col-md-10">
                            <h2 class="my-3 text-gray-100">{{ $title }}</h2>

                            <table class="table table-dark table-striped table-bordered align-middle shadow-sm border-gray-700">
                                <thead>
                                    <tr>
                                        <th>Naam</th>
                                        <th>Email</th>
                                        <th>Gebruikersrol</th>
                                        <th class="text-center">Verwijder</th>
                                        <th class="text-center">Wijzig</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->rolename }}</td>
                                            <td class="text-center">
                                                <form action="{{ route('praktijkmanagement.destroy', $user->Id ?? $user->id) }}" method="POST" onsubmit="return confirm('Weet je zeker dat je deze user wilt verwijderen?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('praktijkmanagement.edit', $user->Id ?? $user->id) }}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success btn-sm">Wijzig</button>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('praktijkmanagement.show', $user->Id ?? $user->id) }}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-warning btn-sm">Details</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-gray-300">Geen gebruikers beschikbaar</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
