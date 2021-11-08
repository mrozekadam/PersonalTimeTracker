@extends('layouts.dash', ['title' => 'Dashboard'])

@section('content')

@for ($i = 0; $i < 10; $i++)
    <div class="bg-gray-100 rounded-xl p-8 m-3" >
       <div class="flex justify-between items-center">
            <div> <h2 class="text-lg">Varhall</h2></div>
            <div>Running - 00d : 12h: 23m : 23s</div>
            <div>

                <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <span>June 2021</span>
                </button>

                <button class="bg-green-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Start attendance</span>
                </button>

                <button class="bg-red-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                    <span>Stop attendance</span>
                </button>


            </div>
       </div>


    </div>

@endfor

@stop