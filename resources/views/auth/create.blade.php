@extends('layout.app')

@section('title', 'Создать компанию')
    
@section('content')

    <div class="h-screen bg-sky-200 flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Создать</h1>

            <form action="{{ route("create_process") }}" class="space-y-5 mt-5" method="POST">
                @csrf

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror" placeholder="Название компании" />

                @error('title')
                <p class="text-red-500">{{ $message }}</p>    
                @enderror

                <input name="address" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('address') border-red-500 @enderror" placeholder="Адрес" />

                @error('address')
                <p class="text-red-500">{{ $message }}</p>    
                @enderror

                <input name="inn" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('inn') border-red-500 @enderror" placeholder="Инн" />

                @error('inn')
                <p class="text-red-500">{{ $message }}</p>    
                @enderror

                <input name="information" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('information') border-red-500 @enderror" placeholder="Информация о компании" />

                @error('information')
                <p class="text-red-500">{{ $message }}</p>    
                @enderror

                <input name="telephone" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Телефон" />

                <input name="director" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Директор" />


                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Подтвердить</button>
            </form>
        </div>
    </div>

@endsection