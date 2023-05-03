<form action="../private/Services/UpdateUser.php" method="post" id="formAccount" name="formAccount">
    <div class="row d-flex mb-3 mt-4 justify-content-center">
        <input type="hidden" value="<?php echo $user->id; ?>" name="userId">
        <div class="col-8">
            <div class="mb-3 mt-2">
                <div class="form-floating">
                    <input oninput="this.value = this.value.toUpperCase();" type="text" maxlength="200" class="form-control" id="name" name="name" value="<?php echo $user->name; ?>" required>
                    <label for="name">Name *</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input oninput="this.value = this.value.toLowerCase();" onchange="validationEditUsername(this.value);" userid="<?php echo $user->id; ?>"  value="<?php echo $user->username; ?>" type="text" maxlength="200" class="form-control" id="username" name="username" required>
                    <label for="username">Username *</label>
                </div>
                <p class="text-message text-uppercase" id="messageUsername"></p>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input onchange="confirmPassword();" type="password" class="form-control" id="password" name="password">
                    <label for="password">New Password</label>
                </div>
                <p class="text-message text-uppercase" id="messagePassword"></p>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input onchange="confirmPassword();" type="password" class="form-control" id="passwordConfirm" name="passwordConfirm">
                    <label for="passwordConfirm">Confirm New Password</label>
                </div>
                <p class="text-message text-uppercase" id="messagePasswordCofirm"></p>
            </div>
            <div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="activePassword" name="activePassword" required>
                    <label for="activePassword">Current Password *</label>
                </div>
                <p class="error-account text-uppercase"><?php if (isset($msg)) echo $msg; ?></p>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" id="btn-edit-account">Save</button>
    </div>
</form>