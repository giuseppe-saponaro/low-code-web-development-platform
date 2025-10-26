<x-fe-layout>

<form action="authenticate" method="post">
	@csrf
	
    <div class="form-floating mb-3">
      	<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
      	<label for="email">Email</label>
    </div>
  	@error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-floating">
      	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
      	<label for="password">Password</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</x-fe-layout>