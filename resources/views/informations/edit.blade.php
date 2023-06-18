<x-app-layout>

<div class="card" style="margin:20px">
<div class="card-header">Edit Student</div>
<div class="card-body">
    <form action="{{ url('information/' . $informations->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{ $informations->id }}">
        <label>Nome de usuário</label><br>
        <input type="text" name="user_name" id="user_name" value="{{ $informations->user_name }}" class="form-control"><br>
        <label>Aplicação</label><br>
        <input type="text" name="app_name" id="app_name" value="{{ $informations->app_name }}" class="form-control"><br>
        <label>URL</label><br>
        <input type="text" name="app_url" id="app_url" value="{{ $informations->app_url }}" 
        class="form-control"><br>
        <label>Senha</label><br>
        <input type="text" name="app_password" id="app_password" value="{{ $informations->app_password }}" 
        class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
</div>
</div>

</x-app-layout>