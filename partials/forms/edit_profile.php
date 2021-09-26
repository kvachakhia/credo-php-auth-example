<form action="/update/user" method="post" enctype="multipart/form-data">

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">First Name</h6>
        </label>
        <input class="mb-4" type="text" name="first_name" value="<?php echo $user['first_name'] ?>" placeholder="Enter First Name" required>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Last Name</h6>
        </label>
        <input class="mb-4" type="text" name="last_name" value="<?php echo $user['last_name'] ?>" placeholder="Enter Last Name" required>
    </div>


    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Passport ID</h6>
        </label>

        <input class="mb-4" type="number" name="passport_id" value="<?php echo $user['passport_id'] ?>" placeholder="Enter Passport ID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="11" readonly>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">E-Mail</h6>
        </label>
        <input class="mb-4" type="email" name="email" value="<?php echo $user['email'] ?>" placeholder="Enter E-Mail" required>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Biography</h6>
        </label>
        <textarea name="biography" class="mb-4 form-control" id="" cols="30" rows="10"><?php echo $user['biography'] ?> </textarea>
    </div>

    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Avatar</h6>
        </label>
        <input type="file" value="<?php echo $user['avatar'] ?>" class="mb-4 form-control" name="avatar" id="">
    </div>




    <div class="row px-3">
        <label class="mb-1">
            <h6 class="mb-0 text-sm">Password</h6>
        </label>
        <input class="mb-4" type="password" name="password" placeholder="Enter Password" minlength="5" maxlength="20" required>
    </div>


    <div class="row mb-3 px-3"> <button type="submit" name="submited" class="btn btn-orange text-center">Update</button> </div>
</form>