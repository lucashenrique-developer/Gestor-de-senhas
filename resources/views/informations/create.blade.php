<x-app-layout>

    <div class="flex justify-center items-center h-screen py-12">
        <div class="max-w-md">

    <form class="bg-white shadow-md rounded py-12 p-6 mb-4 border"action="{{ url('/information') }}" method="POST">
    {!! csrf_field() !!}

    
    <div class="text-center pb-3">
        <label class="from-neutral-950" for="title">Criar nova Senha</label>
    </div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Nome de Usuario</label>
    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="user_name" id="user_name" class="form-control">
</div>

    <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}" class="form-control">

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Aplicação</label>
    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="app_name" id="app_name" class="form-control">
</div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">URL</label>
    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="app_url" id="app_url" class="form-control">
</div>

    <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Senha:</label>
    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="app_password" id="app_password" class="form-control">
    </div>
    <input    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Adicionar" class="btn btn-success">
    </form>
</div>
        </div>
</x-app-layout>