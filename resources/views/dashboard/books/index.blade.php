@extends('dashboard.layouts.main')
@extends('dashboard.layouts.header')
@extends('dashboard.layouts.sidebar')

@section('content')

<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Gerenciador de Livros</h2>
        <a href="{{ route('dashboard.books.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md text-sm">Adicionar Livro</a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Livro</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Autor</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gênero</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Preço</th>
                    <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody id="books-table-body" class="bg-white divide-y divide-gray-200">
                @forelse ($books as $book)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10 rounded object-cover" src="Capa">
                            </div>
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">{{ $book->name }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $book->author->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Genero</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">R${{ number_format($book->price, 2, ',', '.') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Editar</a>
                        <button class="delete-book-btn text-red-600 hover:text-red-900" data-id="${book.id}">Deletar</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">Nenhum livro encontrado.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection