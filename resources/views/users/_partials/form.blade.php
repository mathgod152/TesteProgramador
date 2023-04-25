@csrf
<input type="text" name="name" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}">
<input type="text" name="cpf" placeholder="CPF:" value="{{ $user->cpf ?? old('cpf') }}">
<button type="submit">
    Enviar
</button>