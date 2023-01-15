@extends('base')

@section('title', 'Thoes | Limburgs-AI')

@section('content')
    <div class="my-4">
        <form method="POST" action="{{ route('completion') }}">
            @csrf
            <div>
                <label>
                    <textarea class="bg-gray-200 text-black w-full min-h-[88px] rounded-lg p-2" name="prompt"></textarea>
                </label>
            </div>
            <div class="mt-4">
                <button class="text-white bg-limburg-red py-3 px-6 rounded-lg hover:bg-limburg-blue"
                        type="submit">Vertoal
                </button>
            </div>
        </form>
    </div>
@endsection
