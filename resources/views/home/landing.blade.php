@extends('home.layouts.main')
@extends('home.layouts.header')
@extends('home.layouts.footer')

@section('content')

<!-- Hero Section -->
<section class="mb-12 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-800">Bem-vindo a LibraryHub</h2>
    <p class="max-w-2xl mx-auto text-gray-600">Disbrava os diversos livros em nossa coleção, dos diversos gêneros e autores. Alugue seu livro e o retire na biblioteca</p>
</section>

<!-- Pop livros -->
<section class="mb-16">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Livros mais alugados</h2>
        <a href="#" class="text-indigo-600 hover:text-indigo-800 flex items-center transition-colors">
            Ver todos
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6" id="popular-books">
        <!-- Livros mais alugados -->
    </div>
</section>

<!-- Todos os livros -->
<section>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Todos os livros</h2>
        <div class="relative">
            <input
                type="text"
                id="search-input"
                placeholder="Procurar..."
                class="pl-10 pr-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" />
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6" id="all-books">
        <!-- Livros -->
        @forelse($books as $book)
            <div class="book-card relative bg-white rounded-lg overflow-hidden shadow-lg">
                <div class="relative h-64 overflow-hidden">
                    <img
                        src="capa"
                        alt="capa"
                        class="w-full h-full object-cover" />
                </div>
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800 mb-1">{{ $book->name }}</h3>
                    <p class="text-sm text-gray-600 mb-2">{{ $book->author->name }}</p>
                    <div class="book-description mb-3">
                        <p class="text-sm text-gray-700">
                            {{ $book->description }}
                        </p>
                        <div class="fade-out"></div>
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <div class="flex items-center">
                            <!-- avaliacao estrelas TODO -->
                        </div>
                        <div class="text-lg font-bold text-emerald-600">R${{ number_format($book->price, 2, ',', '.') }}/semana</div>
                    </div>
                    <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition-colors duration-300 flex items-center justify-center">
                        <span>Sobre</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        @empty
            <p>Nenhum livro encontrado</p>
        @endforelse
    </div>
</section>

<!-- Card do livro
<div class="book-card relative bg-white rounded-lg overflow-hidden shadow-lg">
    <div class="relative h-64 overflow-hidden">
        <img
            src="capa"
            alt="capa"
            class="w-full h-full object-cover" />
    </div>
    <div class="p-4">
        <h3 class="text-xl font-bold text-gray-800 mb-1">Titulo</h3>
        <p class="text-sm text-gray-600 mb-2">Autor</p>
        <div class="book-description mb-3">
            <p class="text-sm text-gray-700">
                descricao...
            </p>
            <div class="fade-out"></div>
        </div>
        <div class="flex items-center justify-between mt-3">
            <div class="flex items-center">
                avaliacao estrelas TODO
            </div>
            <div class="text-lg font-bold text-emerald-600">Preco/semana</div>
        </div>
        <button class="mt-4 w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700 transition-colors duration-300 flex items-center justify-center">
            <span>Sobre</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</div>
-->

@endsection