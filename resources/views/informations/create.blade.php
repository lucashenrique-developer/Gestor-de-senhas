<x-app-layout>

<div class="card" style="margin:20px;">
    <div class="card-header">Create New Students</div>
</div>

<div class="card-body">
    <form action="{{ url('/information') }}" method="POST">
    {!! csrf_field() !!}
    <label>Nome de Usuario</label><br>
    <input type="text" name="user_name" id="user_name" class="form-control"><br>
    <input type="hidden" name="user_id" id="user_id" value="{{ $user_id }}" class="form-control"><br>
    <label>Aplicação</label><br>
    <input type="text" name="app_name" id="app_name" class="form-control"><br>
    <label>URL</label><br>
    <input type="text" name="app_url" id="app_url" class="form-control"><br>
    <label>Senha:</label><br>
    <input type="text" name="app_password" id="app_password" class="form-control"><br>
    <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
</div>
    
</x-app-layout>