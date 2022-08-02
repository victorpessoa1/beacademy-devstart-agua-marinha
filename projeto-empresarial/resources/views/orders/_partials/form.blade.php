<div class="w-auto bg-white shadow-md rounded px-8 py-12">
    @csrf
    <label for="users" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Usuário: {{ Auth::user()->name }}</label>

    <br>
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Produtos</label>
    <select id="product_id" name="product_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Selecionar Produto</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
    <br>
    <button type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>
