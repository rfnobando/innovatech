<x-layouts.admin title="Login" bgImage="{{ asset('img/bg/admin.jpg') }}">
    <section class="auth-form rounded bg-light m-auto mt-5 px-3 py-4">
        <h3 class="text-center">Login</h3>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" value="{{ old('email') }}">
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña">
            </div>
            <div class="form-check mt-2">
                <input type="checkbox" class="form-check-input" id="remember"  name="remember">
                <label class="form-check-label" for="remember">Recuérdame</label>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a class="link-primary" href="{{ route('home') }}">Volver</a>
        </div>
    </section>
</x-layouts.admin>