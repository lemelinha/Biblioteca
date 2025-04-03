@use (Illuminate\Support\Facades\Session)
@section('header')
<header class="bg-indigo-800 text-white shadow-md">
    <div class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <h1 class="text-xl font-bold">LibraryHub Admin</h1>
            </a>
            <div class="flex items-center">
                <span class="mr-4" id="user-name">{{ Session::get('user') }}</span>
                <a href="{{ route('login.destroy') }}" id="logout-btn" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm">Logout</a>
            </div>
        </div>
    </div>
</header>
@endsection