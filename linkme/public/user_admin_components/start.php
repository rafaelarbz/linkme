<div class="col-md-6 mt-2">
    <section class="py-4 py-xl-5 mt-5">
            <div class="container">
                <div class="row d-flex justify-content-center mb-5">
                    <div class="col-md-6 col-xl-6 mb-5">
                        <div class="mt-5 mb-5">
                            <div class="mt-5 mb-5">
                                <form action="../private/Services/CreateProfile.php" method="post" class="form-control mt-5 mb-5" id="formStart">
                                    <input type="hidden" value="<?php echo $user->id; ?>" name="userId" id="userId"></input>
                                    <h2>You don't have a <pink>Linkme</pink> profile</h2>
                                    &emsp;<button type="submit" class="btn-start mt-5"><i class="fa fa-arrow-right fa-lg"></i> START NOW&emsp;</button>
                                </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>