@extends("layout")

@section("title", "Login - Food Delivery Admin")

@section("content")
<main class="my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register</h3>
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="col-12">
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        </div>
                        @endif

                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissible">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible">
                            {{ session('error') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            
                            <div class="form-group mb-3">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" required />
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation">Confirm Password:</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Register</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
