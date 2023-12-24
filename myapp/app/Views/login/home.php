<div class="w3-display-middle w3-card-4 w3-white w3-col s11 m4 w3-mobile">
    <div class="w3-xlarge w3-center w3-grey"><?=lang('app.login')?></div>
    <form class="w3-form w3-container" action="<?=base_url('logining')?>" method="post" id="login">
        <?= csrf_field() ?>
        <div class="w3-section">
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="email" id="nemail" placeholder="Email" autofocus required>
            <input class="w3-input w3-border w3-margin-bottom" type="password" placeholder="Password" name="password" required>
            <button type="submit" class="w3-button w3-quarter w3-blue w3-margin-bottom"><i class="fa fa-sign-in"></i></button>
            <button class="w3-button w3-quarter w3-khaki w3-margin-bottom" type="reset"><i class="fa fa-undo"> </i></button>
            <button class="w3-button w3-quarter w3-red w3-margin-bottom" type="button" onclick="$('.w3-modal').hide();"><i class="fa fa-times"> </i></button>
        </div>
    </form>
</div>