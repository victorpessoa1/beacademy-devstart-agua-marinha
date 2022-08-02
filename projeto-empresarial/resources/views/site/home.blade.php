@extends('template.site')

@section('title', 'Cryptos - Home')

@section('content')
@if(session()->has('addcart'))
   <div class="container mx-auto px-60 py-8" style="margin-top:-35px;">
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
         <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
         <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
               <span>{{ session()->get('addcart') }}</span> -
               <a href="{{ route('cart.index')}}"><strong class="font-bold">Acesse seu Carrinho</strong></a>
         </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Fechar</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
      </div>
   </div>
@endif
@if(session()->has('download'))
   <div class="container mx-auto px-60 py-8" style="margin-top:-35px;">
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
         <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
         <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
               <span>{{ session()->get('download') }}</span>
         </div>
         <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Fechar</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
         </button>
      </div>
   </div>
@endif
<div class="container mx-auto px-60 py-8">
    <h1 class=" text-3xl text-center py-8 bg-white">E-commerce de Crypto Moedas</h1>
    <hr>
</div>
<div class="container mx-auto px-60" style="margin-top:-35px;">
   <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
      <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
      </div>
      <div class="carousel-inner relative w-auto overflow-hidden">
         <div class="carousel-item active float-none w-full">
            <img
            src="https://fia.com.br/wp-content/uploads/2022/06/criptomoedas-o-que-sao-para-que-servem-como-investir.jpg"
            class="block w-full"
            alt="Fique Mais" />
         </div>
      </div>
   </div>
</div>

<!-- List Products -->
<div class="container mx-auto px-60 py-8 grid grid-cols-3 gap-20">
   @if(isset($products))
      @foreach ($products as $product)
         <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
         <img class="object-cover rounded-tl-lg rounded-tr-lg"
               src="{{ url($product->image) }}" />
            <div class="px-5 py-3 space-y-2">
               <h3 class="text-lg">{{ $product->name }}</h3>
               <hr>
               <p class="space-x-2">
                  <span class="text-2xl font-semibold">R$ {{ formatMoney($product->price) }}</span>
               </p>
               <div class="px-4 py-2 bg-red-600 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                  <form action="{{ route('cart.store',['id' => $product->id ]) }}" method="POST">
                     @csrf
                     <input type="hidden" name="quatity" value="1">
                     <input type="hidden" name="name" value="{{ $product->name }}">
                     <input type="hidden" name="identity" value="{{ $product->id }}">
                     <input type="hidden" name="price" value="{{ $product->price }}">
                     <button type="submit">Adicionar ao Carrinho</button>
                  </form>
               </div>

            </div>
         </div>
      @endforeach
   @endif
</div>

<div class="container mx-auto px-60 py-8">
   {{ $products->links() }}
   <br>
   <hr>
</div>
@endsection




