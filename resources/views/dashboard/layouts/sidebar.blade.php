@section('sidebar')
<nav class="bg-indigo-700 text-white">
    <div class="container mx-auto px-4">
        <div class="flex space-x-4 py-2">
            <a href="{{ route('dashboard') }}" class="py-2 px-4 {{ Route::currentRouteName() == 'dashboard' ? '' : 'hover:' }}bg-indigo-800 rounded">Dashboard</a>
            <a href="{{ route('dashboard.books') }}" class="py-2 px-4 {{ Route::currentRouteName() == 'dashboard.books' ? '' : 'hover:' }}bg-indigo-800 rounded">Livros</a>
            <a href="{{ route('dashboard.authors') }}" class="py-2 px-4 {{ Route::currentRouteName() == 'dashboard.authors' ? '' : 'hover:' }}bg-indigo-800 rounded">Autores</a>
            <a href="{{ route('dashboard.stock') }}" class="py-2 px-4 {{ Route::currentRouteName() == 'dashboard.stock' ? '' : 'hover:' }}bg-indigo-800 rounded">Estoque</a>
            <a href="{{ route('dashboard.readers') }}" class="py-2 px-4 {{ Route::currentRouteName() == 'dashboard.readers' ? '' : 'hover:' }}bg-indigo-800 rounded">Leitores</a>
        </div>
    </div>
</nav>
@endsection
