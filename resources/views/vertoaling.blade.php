@extends('base')

@section('title', 'Vertoaling | Limburgs-AI')

@section('content')
    <div class="my-4">
        <label class="block text-gray-700 font-medium mb-4 text-limburg-blue">Órigineel tèks</label>
        <div
            class="bg-gray-200 text-black p-2 mb-4 rounded-lg w-full">{!! $prompt->prompt !!}
        </div>
        <label class="block text-gray-700 font-medium mb-4 text-limburg-red">Vertaolde tèks</label>
        <div
            class="bg-gray-200 text-black p-2 rounded-lg w-full">{!! $prompt->response !!}
        </div>
        <div class="mt-8">
            <button><a href="/" class="text-white bg-limburg-red py-3 px-6 rounded-lg hover:bg-limburg-blue">Trök</a>
            </button>
        </div>
    </div>
@endsection
