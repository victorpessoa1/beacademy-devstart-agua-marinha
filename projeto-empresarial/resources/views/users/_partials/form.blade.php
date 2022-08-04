<div class="w-auto bg-white shadow-md rounded px-8 py-12">
    @csrf
    <label for="name">Nome</label>
    <input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="email">E-mail</label>
    <input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="dtbirth">Data de Nascimento</label>
    <input type="date" name="dtbirth" placeholder="Data de Nascimento:" value="{{ $user->dtbirth ?? old('dtbirth') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="address">Endereço</label>
    <input type="text" name="address" placeholder="Endereço:" value="{{ $user->address ?? old('address') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="phone">Telefone</label>
    <input type="text" name="phone" placeholder="Telefone:" value="{{ $user->phone ?? old('phone') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">
    <label for="password">Senha</label>
    <input type="password" name="password" placeholder="Senha:" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline my-2">

    <button type="submit" class="w-full shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
        Enviar
    </button>
</div>
