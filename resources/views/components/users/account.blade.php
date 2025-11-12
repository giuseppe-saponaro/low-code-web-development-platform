<x-layout>

    <div class="container mt-4">

        <h5>Cambio Password</h5>

        <form action="/{{ $action }}" method="post">
            @csrf
            @method("put")

            <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-sm" name="current_password" value="{{ old("current_password") }}"/>
                <label>Password Corrente</label>
                @error("current_password")
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-sm" name="password" value="{{ old("password") }}"/>
                <label>Nuova Password</label>
                @error("password")
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 form-floating">
                <input type="password" class="form-control form-control-sm" name="password2" value="{{ old("password2") }}"/>
                <label>Conferma Password</label>
                @error("password2")
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-sm mb-3">Salva</button>

        </form>

    </div>

</x-layout>
