<x-app-layout>
    <!-- This is an example component -->
       

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 flex justify-between">

                        <button class="bg-transparent text-gray-900 font-semibold py-2 px-4 border border-zinc-950 rounded"><a href="{{ url('/information/create') }}">
                            Adicionar
                        </a></button>

                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto pb-12 pt-1">
            <div class="flex flex-col mx-auto items-center">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden ">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-100 dark:bg-gray-700 ">
                        <tr>
                            <th scope="col" class="p-4 h-4  py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                #
                             </th>
 
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Nome de usuário
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Aplicação
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                URL
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Senha
                            </th>
                            <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                Opções
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                        @foreach ($informations as $item)
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="p-4 py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">{{ $item->user_name }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">{{ $item->app_name }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">{{ $item->app_url }}</a>
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">{{ $item->app_password }}</td>

                           
                            
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                
                                <button class="bg-transparent text-gray-900 font-semibold  py-1 px-3 border border-gray-900 rounded"><a href="{{ url('/information/' . $item->id . '/edit') }}">
                                    Copiar
                                </a></button>
                                
                                <button class="bg-transparent text-gray-900 font-semibold  py-1 px-3 border border-gray-900 rounded"><a href="{{ url('/information/' . $item->id . '/edit') }}">
                                Editar
                            </a></button>
                        
                            <form action="{{ url('information/' .$item->id) }}" method="POST" style="display:inline;">
                                {{ method_field('DELETE') }}
                                 {{ csrf_field() }}
                                 <button type="submit" class="bg-transparent text-gray-900 font-semibold  py-1 px-3 border border-gray-900 rounded" title="Delete Aplication" onclick="return confirm('Confirm Delete?')">Deletar</button> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
