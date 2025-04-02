@extends('home.layouts.main')
@extends('home.layouts.header')
@extends('home.layouts.footer')

@section('content')

<div class="max-w-md mx-auto bg-white rounded-lg shadow-md overflow-hidden mt-8">
    <div class="py-6 px-8">
        <div class="text-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Trocar a senha</h2>
            <p class="text-sm text-gray-600 mt-2">Entre com suas 12 palavras-chave</p>
        </div>

        <form id="request-reset-form" class="space-y-4">
            <div>
                <label for="reset-email" class="block text-sm font-medium text-gray-700 mb-1">Palavras-chave</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                    </div>
                    <textarea id="reset-email" required class="pl-10 w-full border border-gray-300 rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Palavras-chave"></textarea>
                </div>
            </div>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-white text-gray-500">Trocar de senha</span>
                </div>
            </div>

            <div>
                <label for="new-password" class="block text-sm font-medium text-gray-700 mb-1">Nova senha</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="new-password" type="password" required class="pl-10 w-full border border-gray-300 rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 eye-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-1">Confirmar Senha</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="confirm-password" type="password" required class="pl-10 w-full border border-gray-300 rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer toggle-password">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 eye-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="w-full bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    Trocar senha
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <a href="{{ route('login.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                Votlar para o login
            </a>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('js/auth/reset-password/reset-password.index.js') }}"></script>

@endsection
