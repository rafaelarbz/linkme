<form action="../private/Services/UpdateProfile.php" method="post" id="formStyle" name="formStyle">
    <div class="row d-flex mb-3 mt-4">
        <input type="hidden" value="<?php echo $profile->id; ?>" name="profileId">
        <div class="col">
            <div class="form-floating">
                <input onchange="this.form.submit();" class="form-control" type="color" name="backgroundColor" id="backgroundColor" value="<?php echo $profile->background_color; ?>">
                <label for="backgroundColor">Background</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <select onchange="this.form.submit();" class="form-select" id="fontFamily" name="fontFamily" aria-label="Font Styles">
                    <option <?php if ($profile->font_family == 'Archivo' ) : ?> selected <?php endif; ?> style="font-family:Archivo;font-weight:700;" value="Archivo">Archivo</option>
                    <option <?php if ($profile->font_family == 'Archivo Black' ) : ?> selected <?php endif; ?>  style="font-family:Archivo Black;font-weight:700;" value="Archivo Black">Archivo Black</option>
                    <option <?php if ($profile->font_family == 'Balsamiq Sans' ) : ?> selected <?php endif; ?> style="font-family:Balsamiq Sans;font-weight:700;" value="Balsamiq Sans">Balsamiq Sans</option>
                    <option <?php if ($profile->font_family == 'Bree Serif' ) : ?> selected <?php endif; ?> style="font-family:Bree Serif;font-weight:700;" value="Bree Serif">Bree Serif</option>
                    <option <?php if ($profile->font_family == 'Indie Flower' ) : ?> selected <?php endif; ?> style="font-family:Indie Flower;font-weight:700;" value="Indie Flower">Indie Flower</option>
                    <option <?php if ($profile->font_family == 'Inconsolata' ) : ?> selected <?php endif; ?> style="font-family:Inconsolata;font-weight:700;" value="Inconsolata">Inconsolata</option>
                    <option <?php if ($profile->font_family == 'Montserrat' ) : ?> selected <?php endif; ?> style="font-family:Montserrat;font-weight:700;" value="Montserrat">Montserrat</option>
                    <option <?php if ($profile->font_family == 'Pacifico' ) : ?> selected <?php endif; ?> style="font-family:Pacifico;font-weight:700;" value="Pacifico">Pacifico</option>
                    <option <?php if ($profile->font_family == 'Roboto Mono' ) : ?> selected <?php endif; ?> style="font-family:Roboto Mono;font-weight:700;" value="Roboto Mono">Roboto Mono</option>
                    <option <?php if ($profile->font_family == 'Shadows Into Light' ) : ?> selected <?php endif; ?> style="font-family:Shadows Into Light;font-weight:700;" value="Shadows Into Light">Shadows Into Light</option>
                </select>
                <label for="fontFamily">Font Styles</label>
            </div>
        </div>
    </div>
    <div class="row d-flex mb-3">
        <div class="col-6">
            <div class="form-floating">
                <input onchange="this.form.submit();" class="form-control" type="color" name="fontColor" id="fontColor" value="<?php echo $profile->font_color; ?>">
                <label for="fontColor">Font Color</label>
            </div>
        </div>
    </div>
    <div class="row d-flex mb-3">
        <div class="col-6 mb-3">
            <div class="card card-btn">
                <div class="card-body">
                    <label class="container">
                        <input onchange="this.form.submit();" type="radio" name="buttonClass" value="rounded" class="form-check-input" <?php if ($profile->button_class == 'rounded') : ?> checked <?php endif; ?>>
                    </label>
                    <div class="text-center">
                        <button class="rounded-example">Button</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 mb-3">
            <div class="card card-btn">
                <div class="card-body">
                    <label class="container">
                        <input onchange="this.form.submit();" type="radio" name="buttonClass" value="square" class="form-check-input"  <?php if ($profile->button_class == 'square') : ?> checked <?php endif; ?>>
                    </label>
                    <div class="text-center">
                        <button class="square-example">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex mb-3">
        <div class="col">
            <div class="form-floating">
                <input onchange="this.form.submit();" class="form-control" type="color" name="buttonColor" id="buttonColor" value="<?php echo $profile->button_color; ?>">
                <label for="buttonColor">Button Background</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input onchange="this.form.submit();" class="form-control" type="color" name="buttonBorderColor" id="buttonBorderColor" value="<?php echo $profile->button_border_color; ?>">
                <label for="buttonBorderColor">Button Border</label>
            </div>
        </div>
    </div>
</form>