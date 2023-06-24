<x-app-layout>

    <div class="flex justify-center items-center h-screen py-12">
        <div class="max-w-md">
            <form class="bg-white shadow-md rounded py-12 p-6 mb-4 border"
                action="{{ url('information/' . $informations->id) }}" method="POST">
                {!! csrf_field() !!}
                @method('PATCH')

                <div class="text-center pb-3">
                <label class="from-neutral-950" for="title">Editar Senha</label>
                </div>

                <input type="hidden" name="id" id="id" value="{{ $informations->id }}">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nome de usuário</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="user_name" id="user_name" value="{{ $informations->user_name }}"
                        class="form-control">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Aplicação</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="app_name" id="app_name" value="{{ $informations->app_name }}"
                        class="form-control">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">URL</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="app_url" id="app_url" value="{{ $informations->app_url }}"
                        class="form-control">
                </div>

                <div class="mb-4 relative">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Senha</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="password" name="app_password" id="app_password" value="{{ $informations->app_password }}"
                        class="form-control" >
                        <span class="absolute right-0 top-1/2 text-gray-400 cursor-pointer" onmousedown="showPassword()" onmouseup="hidePassword()">
                            <i class="fas fa-eye"></i>
                          </span>
                    
                </div>

           
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline cursor-pointer"
                    type="submit" value="Salvar" class="btn btn-success">
                    
            </form>
        </div>
    </div>


</x-app-layout>
