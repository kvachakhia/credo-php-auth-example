<form action="/auth/login" method="post">

    <div class="row px-3"> <label class="mb-1">
            <h6 class="mb-0 text-sm">Passport ID</h6>
        </label> <input class="mb-4" type="text" name="passport_id" placeholder="Enter a valid Passport ID"> </div>
    <div class="row px-3"> <label class="mb-1">
            <h6 class="mb-0 text-sm">Password</h6>
        </label> <input type="password" name="password" placeholder="Enter password"> </div>

    <div class="row mb-3 px-3"> <button type="submit" name="login" class="btn btn-orange text-center">Login</button> </div>
    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="/register" class="text-danger ">Register</a></small> </div>
</form>