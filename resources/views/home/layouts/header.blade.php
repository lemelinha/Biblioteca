@section('header')
<header class="bg-indigo-800 text-white shadow-md">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="flex items-center mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <div>
                    <h1 class="text-2xl font-bold">LibraryHub</h1>
                    <p class="text-xs text-indigo-200">Coleção de livros online</p>
                </div>
            </div>
            <nav class="flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-white hover:text-indigo-200 transition-colors">Home</a>
                <a href="#" class="text-white hover:text-indigo-200 transition-colors">Catálogo</a>
                <a href="#" class="text-white hover:text-indigo-200 transition-colors">Autores</a>
                @use('\Illuminate\Support\Facades\Session')
                @if (!Session::has('user'))
                <a href="{{ route('login.index') }}" class="bg-indigo-600 hover:bg-indigo-700 px-4 py-2 rounded-md text-white transition-colors">Login</a>
                @else
                <a href="{{ route('dashboard') }}" class="text-white hover:text-indigo-200 transition-colors">Minha conta</a>
                @endif
            </nav>
        </div>
    </div>
</header>
@endsection