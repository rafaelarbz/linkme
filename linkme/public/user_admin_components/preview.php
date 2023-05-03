<div class="col-md-6 mt-2">
    <section class="py-4 py-xl-5 mt-2">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-6" id="preview" style="font-family: <?php echo $profile->font_family; ?>; background: <?php echo $profile->background_color; ?>; overflow-y:scroll;">
                        <div class="text-center mt-5 mb-5">
                            <h6 class="mb-5" style="color: <?php echo $profile->font_color; ?>; font-weight:600;"> @<?php echo $username; ?></h6>
                            <?php if ($links != null) : ?>
                                <?php foreach ($links as $link) : ?>
                                    <a type="button" target="_blank" style="background: <?php echo $profile->button_color; ?>; border: 3px solid <?php echo $profile->button_border_color; ?>;color: <?php echo $profile->font_color; ?>;" class="<?php echo $profile->button_class; ?> mb-3" href="<?php echo $link['4'] ;?>"><?php echo $link['3']; ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>