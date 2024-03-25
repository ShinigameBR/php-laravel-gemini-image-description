@extends('layouts.app')

@section('content')
<div class="flex flex-col justify-center items-center h-screen bg-gray-200">
    <div class="bg-white w-1/2 p-6 rounded-lg shadow-md">
        <form action="{{ route('describe-image') }}" method="post" autocomplete="off">
            @csrf
            <div class="flex items-center border border-gray-200 rounded-md overflow-hidden">
                <input type="text" name="image_url" class="w-full px-4 py-2 focus:outline-none" placeholder="Insira o URL da imagem e veja a descrição!">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white hover:bg-blue-600 focus:outline-none">Pesquisar</button>
            </div>
        </form>
    </div>
    @if (Session::has('message'))
        <div class="flex justify-center items-center bg-white w-1/2 my-4 p-6 shadow-md rounded-lg">
            <img class="max-h-64 rounded-lg" src="{{ Session::get('image_url') }}" alt="Imagem da URL.">
        </div>
        <div class="bg-white w-1/2 my-4 p-6 shadow-md rounded-lg">
            <p class="text-justify">{{ Session::get('message') }}</p>
        </div>
    @endif
</div>
@endsection
