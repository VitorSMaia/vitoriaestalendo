@extends('layouts.app')
@section('title', 'Home')
@section('content')

    <div x-show="modal">
        <div class="fixed z-10 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 min-h-screen">
            <div class=" flex justify-center items-center ">
                <div class="bg-white rounded-xl shadow-xl shadow-gray-900" @click.outside="modal = false">
                    <div class=" h-auto p-10 w-96 ">
                        @livewire('books.form')
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="grid grid-cols-12 space-y-5">
        <div class="col-span-12">
            <div class="bg-[rgb(16,30,60)] rounded-lg shadow-xl shadow-gray-900">
                <div class="flex justify-center items-center">
                    <img  src="{{ asset('storage/img/logo.png') }}" alt="">
                </div>
                
            </div>
        </div>
        <div class="col-span-12 md:col-span-3">
            <div class="flex justify-center items-center">
                <img class="shadow-xl shadow-gray-900" src="{{ asset('storage/img/person.png') }}" class="rounded-lg"  alt="">
            </div>
        </div>
        <div class="col-span-12 md:col-span-9">
            <div class="bg-slate-300 rounded-lg shadow-xl shadow-gray-900">
                <p class="text-[rgb(46,59,85)] font-semibold text-justify leading-loose break-words italic indent-8 p-2">
                    Sagitariana, chocólatra, corvina, whovian, apaixonada por romances,
                    fascinada por super herois e espionagem, desbravadora de mistérios 
                    e mundos fantásticos, blogueira e bookuber desde 2012, designer, técnica em telecomunicações, 
                    ex-diretora do centro acadêmico de engenharia de telecomunicações do IFCE
                    e engenheira em formação ;)</p>
                <div class="flex justify-center p-5">
                    <a href="#teste">
                        <svg xmlns="http://www.w3.org/2000/svg" class="animate-bounce h-10 w-10 fill-[rgb(16,30,60)]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                        </svg>
                    </a>
                </div>
                
            </div>
        </div>
        <div class="col-span-12" id="teste">
            <div class="grid md:grid-cols-12 bg-slate-300 rounded-lg shadow-xl shadow-gray-900">
              <div class="col-span-6">
                  <div class="flex flex-col justify-center items-center">
                    <img class="h-20" src="storage/img/recomendo.png" alt="">
                  </div>
                  @livewire('home.books')
              </div>
              <div class="col-span-6 p-5">
                <div class="flex flex-col justify-center items-center">
                    <img class="h-20" src="storage/img/contato.png" alt="">
                  </div>
                  @livewire('home.contact')
              </div>
            </div>
        </div>
    </div>
@endsection