@extends("layout.main")

@section('content')
<main class="form-signin w-50 m-auto">
    <form action="/register" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating my-3">
            <input name="name" type="text" class="form-control" id="floatingName" placeholder="Name">
            <label for="floatingName">Name</label>
        </div>
        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign up</button>
        <p class="mt-3 mb-3 text-body-secondary">Already have an account? <a href="/login">Login</a></p>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
</main>
@endsection
