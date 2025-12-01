<x-fe-layout>

    <div class="h-100 d-flex align-items-center justify-content-center p-2 flex-column text-secondary">

        <h1>{{ env("APP_NAME") }}</h1>

        <form action="authenticate" method="post" style="width: 400px;">
            @csrf

            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
                <label for="email">{{ __("main.login.Email") }}</label>
            </div>
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">{{ __("main.login.Password") }}</label>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-person"></i> {{ __("main.login.Login") }}
            </button>
        </form>

    </div>

</x-fe-layout>
