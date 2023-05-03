<form action="../private/Services/CreateLink.php" method="post" id="formAddLinks" name="formAddLinks">
    <div class="row d-flex mb-3 mt-4">
        <input type="hidden" value="<?php echo $user->id; ?>" name="userId" id="userId">
        <div class="col-8">
            <div class="form-floating">
                <input class="form-control" type="text" name="linkTitle" id="linkTitle" required>
                <label for="linkTitle">Title</label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" id="btn-save-link">ADD</button>
        </div>
    </div>
    <div class="row d-flex mb-3">
        <div class="col">
            <div class="form-floating">
                <input class="form-control" type="text" name="linkAddress" id="linkAddress" required>
                <label for="linkAddress">Link (https://example.com)</label>
            </div>
        </div>
    </div>
</form>
<div class="col mb-3 mt-4">
    <h5 id="text-active-links">Active Links</h5>
    <hr>

    <?php if ($links == null) : ?>
        <h6 id="no-links" class="text-center text-uppercase mb-5 mt-4">No links</h6>
    <?php else : ?>
        <?php foreach ($links as $link) : ?>
            <form action="../private/Services/UpdateLink.php" method="post" id="formEditLinks<?php echo $link['0']; ?>" name="formEditLinks<?php echo $link['0']; ?>">
                <input type="hidden" name="linkId" value="<?php echo $link['0']; ?>">
                <div class="row d-flex mb-3">
                    <div class="col-4">
                        <div class="form-floating">
                            <input onchange="this.form.submit();" class="form-control" type="text" name="linkTitleEdit[]" value="<?php echo $link['3']; ?>" required>
                            <label for="linkTitle">Title</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input onchange="this.form.submit();" class="form-control" type="text" name="linkAddressEdit[]" value="<?php echo $link['4']; ?>" id="linkAddress<?php echo $link['0']; ?>" required>
                            <label for="linkAddress">Link</label>
                        </div>
                    </div>
                </div>
            </form>
            <div class="row d-flex mb-3">
                <form action="../private/Services/DeleteLink.php" method="post">
                    <div class="text-left">
                        <input type="hidden" name="linkIdDelete[]" value="<?php echo $link['0']; ?>">
                        <button onclick="showConfirmDelete(<?php echo $link['0']; ?>);" type="button" class="btn-delete-link"><i class="fa fa-trash fa-lg"></i></button>
                    </div>
                    <div id="divHide<?php echo $link['0']; ?>" style="display: none;">
                        <div class="text-uppercase inline div-confirm-delete">
                            Are you sure?
                            <button class="btn-delete-link" type="submit">Yes, delete it!</button>
                            <button onclick="hideConfirmDelete(<?php echo $link['0']; ?>);" class="btn-delete-link" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
