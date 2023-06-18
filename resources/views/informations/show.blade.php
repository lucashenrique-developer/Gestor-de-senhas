<x-app-layout>

<div class="card" style="margin:20px">
<div class="card-header">passwords Page</div>
<div class="card-body">
    <div class="card-body">
        <h5 class="card-title">Nome de usuário: {{ $informations->user_name }}</h5>
        <p class="card-text">Aplicação: {{ $informations->app_name }}</p>
        <p class="card-text">URL: {{ $informations->url }}</p>
        <p class="card-text">Senha: {{ $informations->app_password }}</p>
    </div>
</div>
</div>
    
</x-app-layout>