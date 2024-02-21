<x-layouts.admin title="Registro" bgImage="{{ asset('img/bg/admin.jpg') }}">
    <section class="auth-form rounded bg-light m-auto mt-5 px-3 py-4" bgImage="{{ asset('img/bg/admin.jpg') }}">
        <h3 class="text-center">Registro</h3>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" autofocus="autofocus" placeholder="Ingresa tu nombre">
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu email">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Repetir contraseña</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña">
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="link-primary" href="{{ route('home') }}">Volver</a>
        </div>
    </section>
</x-layouts.admin>