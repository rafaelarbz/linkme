<div class="col-md-6">
    <section class="py-4 py-xl-5">
            <div class="container">
                <h3 id="title-edit" class="mb-3">Edit Profile</h3>
                <nav class="nav flex-column">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button <?php if($tab == "nav-links-tab") : ?>class="nav-link active"<?php else : ?> class="nav-link" <?php endif; ?> id="nav-links-tab" data-bs-toggle="tab" data-bs-target="#nav-links" type="button" role="tab" aria-controls="nav-links" aria-selected="true">Links</button>
                        <button <?php if($tab == "nav-styles-tab") : ?>class="nav-link active"<?php else : ?> class="nav-link" <?php endif; ?> id="nav-styles-tab" data-bs-toggle="tab" data-bs-target="#nav-styles" type="button" role="tab" aria-controls="nav-styles" aria-selected="false">Styles</button>
                        <button <?php if($tab == "nav-account-tab") : ?>class="nav-link active"<?php else : ?> class="nav-link" <?php endif; ?> id="nav-account-tab" data-bs-toggle="tab" data-bs-target="#nav-account" type="button" role="tab" aria-controls="nav-account" aria-selected="false">Account</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div <?php if($tab == "nav-links-tab") : ?>class="tab-pane fade show active" <?php else : ?> class="tab-pane fade" <?php endif; ?> id="nav-links" role="tabpanel" aria-labelledby="nav-links-tab" tabindex="0">
                        <?php include('form_links.php'); ?>
                    </div>
                    <div <?php if($tab == "nav-styles-tab") : ?>class="tab-pane fade show active" <?php else : ?> class="tab-pane fade" <?php endif; ?> id="nav-styles" role="tabpanel" aria-labelledby="nav-styles-tab" tabindex="0">
                        <?php include('form_style.php'); ?>
                    </div>
                    <div <?php if($tab == "nav-account-tab") : ?>class="tab-pane fade show active" <?php else : ?> class="tab-pane fade" <?php endif; ?> id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab" tabindex="0">
                        <?php include('form_account.php'); ?>
                    </div>
                </div>
            </div>
    </section>
</div>