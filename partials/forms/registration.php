<form action="/add/user" method="post">

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">First Name</h6>
        </label>
        <input class="mb-4" type="text" name="first_name" placeholder="Enter First Name" required>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Last Name</h6>
        </label>
        <input class="mb-4" type="text" name="last_name" placeholder="Enter Last Name" required>
    </div>


    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Passport ID</h6>
        </label>

        <input class="mb-4" type="number" name="passport_id" placeholder="Enter Passport ID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="11" required>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">E-Mail</h6>
        </label>
        <input class="mb-4" type="email" name="email" placeholder="Enter E-Mail" required>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Biography</h6>
        </label>
        <textarea name="biography" class="mb-4 form-control" id="" cols="30" rows="10"></textarea>
    </div>


    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Password</h6>
        </label>
        <input class="mb-4" type="password" name="password" placeholder="Enter Password" minlength="5" maxlength="20" required>
    </div>


    <div class="row mb-3 px-3"> <button type="submit" name="submited" class="btn btn-orange text-center">Registration</button> </div>
    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a href="/register.php" class="text-danger ">Register</a></small> </div>
</form>