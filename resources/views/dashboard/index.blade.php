@extends('dashboard.layouts.main')
@extends('dashboard.layouts.header')
@extends('dashboard.layouts.sidebar')

@section('content')

<h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h2>

<!-- Quick Stats -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-500">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-blue-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Total de Livros</h3>
                <p class="text-2xl font-bold text-gray-800" id="total-books">0</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-green-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Total de Autores</h3>
                <p class="text-2xl font-bold text-gray-800" id="total-authors">0</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-yellow-500">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-yellow-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Livros Livres</h3>
                <p class="text-2xl font-bold text-gray-800" id="available-books">0</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-purple-500">
        <div class="flex items-center">
            <div class="flex-shrink-0 bg-purple-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <div class="ml-4">
                <h3 class="text-gray-500 text-sm">Total de Leitores</h3>
                <p class="text-2xl font-bold text-gray-800" id="total-users">0</p>
            </div>
        </div>
    </div>
</div>

<!-- Quick Links -->
<h3 class="text-xl font-bold text-gray-800 mb-4">Ações Rápidas</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <a href="{{ route('dashboard.books') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
        <div class="flex items-center">
            <div class="bg-indigo-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <div class="ml-4">
                <h4 class="font-bold text-gray-800">Livros</h4>
                <p class="text-sm text-gray-500">Faça o controle dos livros</p>
            </div>
        </div>
    </a>

    <a href="{{ route('dashboard.authors') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
        <div class="flex items-center">
            <div class="bg-indigo-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div class="ml-4">
                <h4 class="font-bold text-gray-800">Autores</h4>
                <p class="text-sm text-gray-500">Faça o controle dos leitores</p>
            </div>
        </div>
    </a>

    <a href="{{ route('dashboard.stock') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
        <div class="flex items-center">
            <div class="bg-indigo-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                </svg>
            </div>
            <div class="ml-4">
                <h4 class="font-bold text-gray-800">Estoque</h4>
                <p class="text-sm text-gray-500">Faça o controle de estoque da biblioteca</p>
            </div>
        </div>
    </a>

    <a href="{{ route('dashboard.readers') }}" class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow">
        <div class="flex items-center">
            <div class="bg-indigo-100 rounded-full p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
            <div class="ml-4">
                <h4 class="font-bold text-gray-800">Leitores</h4>
                <p class="text-sm text-gray-500">Veja os leitores cadastrados</p>
            </div>
        </div>
    </a>
</div>

<!-- Recent Activity -->
<h3 class="text-xl font-bold text-gray-800 mb-4">Livros Não Devolvidos</h3>
<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Livro</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Dia de resgate</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Dia de devolução</th>
                </tr>
            </thead>
            <tbody id="low-stock-table-body" class="bg-white divide-y divide-gray-200">
            </tbody>
        </table>
    </div>
</div>

@endsection
