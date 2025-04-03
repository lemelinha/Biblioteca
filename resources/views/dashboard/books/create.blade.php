@extends('dashboard.layouts.main')
@extends('dashboard.layouts.header')
@extends('dashboard.layouts.sidebar')

@section('content')

<div class="bg-white rounded-lg shadow-md p-6 mb-8">
    <h2 id="book-form-title" class="text-2xl font-bold text-gray-800 mb-6">Adicionar Livro</h2>

    <form id="book-form" class="space-y-4" action="{{ route('dashboard.books.store') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="book-title" class="block text-sm font-medium text-gray-700 mb-1">Título</label>
                <input type="text" name="title" id="book-title" required class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('title') }}">
            </div>

            <div>
                <label for="book-author" class="block text-sm font-medium text-gray-700 mb-1">Autor</label>
                <select id="book-author" name="author_id" required class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @if (!$authors->isEmpty())
                    <option value="" selected>Selecione um autor</option>
                    @endif
                    @forelse ($authors as $author)
                    <option value="{{ $author->id }}" {{ ($author->id == old('author')?'selected':'') }}>{{ $author->name }}</option>
                    @empty
                    <option value="" selected>Nenhum autor encontrado</option>
                    @endforelse
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="book-genre" class="block text-sm font-medium text-gray-700 mb-1">Gênero</label>
                <select id="book-genre" name="gender_id" required class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @if (!$genders->isEmpty())
                    <option value="" selected>Selecione um gênero</option>
                    @endif
                    @forelse ($genders as $gender)
                    <option value="{{ $gender->id }}" {{ ($gender->id == old('gender')?'selected':'') }}>{{ $gender->name }}</option>
                    @empty
                    <option value="" selected>Nenhum Gênero encontrado</option>
                    @endforelse
                </select>
            </div>

            <div>
                <label for="book-price" class="block text-sm font-medium text-gray-700 mb-1">Preço</label>
                <input type="number" name="price" id="book-price" step="0.01" min="0" required class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('price') }}">
            </div>
        </div>

        <div>
            <label for="book-description" class="block text-sm font-medium text-gray-700 mb-1">Descrição</label>
            <textarea id="book-description" name="description" rows="3" class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="book-cover" class="block text-sm font-medium text-gray-700 mb-1">URL da capa</label>
            <input type="text" name="cover_url" id="book-cover" class="border border-gray-300 rounded-md w-full px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" value="{{ old('cover_url') }}">
        </div>

        <div class="flex justify-end space-x-3 pt-4">
            <div class="text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <a href="{{ route('dashboard.books') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">Cancelar</a>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">Salvar</button>
        </div>
    </form>
</div>

@endsection