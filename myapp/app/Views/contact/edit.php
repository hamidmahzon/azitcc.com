<div class="w3-modal-content w3-animate-opacity">
    <div class="w3-container">
    <form action="<?=base_url('edit/contact/'.$record[0]->id)?>" method="post" class="w3-form w3-row-padding w3-margin-bottom" enctype="multipart/form-data">
      <div class="w3-center w3-yellow w3-xlarge w3-padding"> <?=lang('app.edit')?> <?=$record[0]->name;?></div>
        <?= csrf_field() ?>
      <div class="w3-col w3-row-padding">
      <div class="w3-section">
        <input type="text" name="name" id="name" class="w3-input w3-border" placeholder="<?=lang('app.name')?>" value="<?=$record[0]->name?>" required>
      </div>
      <div class="w3-section">
        <input type="text" name="value" id="value" class="w3-input w3-border" value="<?=$record[0]->value?>" required>
      </div>      
      </div>

    <div class="w3-section w3-col m2">
      <button type="submit" class="w3-button w3-col w3-blue w3-large w3-padding"><i class="fas fa-save"></i></button>
    </div>
    <div class="w3-section w3-col m2">
      <button type="reset" class="w3-button w3-col w3-yellow w3-large w3-padding"><i class="fas fa-undo"></i></button>
    </div>
    <div class="w3-section w3-col m2">
      <button type="button" class="w3-button w3-col w3-red w3-large w3-padding" onclick="$('.w3-modal').hide();"><i class="fas fa-times"></i></button>
    </div>
  </form>
</div>