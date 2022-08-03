@extends('template.admin')

@section('title', 'Painel Admin')

@section('content')

    <div class="container m-1 px-50 py-8 grid grid-cols-3 gap-20">

        <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
            <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
                 src="https://imagensemoldes.com.br/wp-content/uploads/2020/09/%C3%8Dcone-Computador-Bitcoin-PNG.png" />
            <div class="px-5 py-3 space-y-2">

                <hr>
                <div class="flex justify-between items-center pt-3 pb-2">
                    <a href="{{ route('products.index')}}"
                       class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                        Produtos</a>

                </div>
            </div>
        </div>

        <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
            <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
                 src="https://cdn-icons-png.flaticon.com/512/306/306232.png" />
            <div class="px-5 py-3 space-y-2">
                <hr>
                <div class="flex  justify-between items-center pt-3 pb-2">
                    <a href="{{ route('users.index')}}"
                       class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                        Usuários</a>

                </div>
            </div>
        </div>

        <div class="w-72 bg-white drop-shadow-md rounded-lg ...">
            <img class="m-auto object-cover rounded-tl-lg rounded-tr-lg"
                 src="https://cdn-icons-png.flaticon.com/512/5220/5220627.png" />
            <div class="px-5 py-3 space-y-2">

                <hr>
                <div class="flex mx-auto justify-between items-center pt-3 pb-2">
                    <a href="{{ route('orders.index')}}"
                       class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300">
                        Pedidos</a>

                </div>
            </div>
        </div>


    </div>


@endsection
