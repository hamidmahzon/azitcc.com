<?php
    $color  = session()->get('color');

    $bcolor = 'bg-white text-dark';
    $ncolor = 'bg-secondary text-white';
    
    if(@$color)
    {
        $color  = 'white';
    }
    if(@$color == 'black')
    {
        $bcolor = 'bg-dark text-white';
        $ncolor = 'bg-black text-white';
    }

?>

<?= $this->extend('default') ?>
<?= $this->section('title') ?>
	<?=lang('app.home_title')?>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <?php
    if(file_exists('assets/img/home/'.$records[0]->img))
    {?>
	<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small"><?=$records[0]->name?> </span>
      
    <span class="w3-xlarge w3-hide-large w3-hide-medium"><?=$records[0]->desc?></span><br>
    <span class="w3-large w3-hide-small"><?=$records[0]->desc?></span>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xxlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/home/'.$records[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
      <?php
    }?>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more</a> 
    </p>
  </div> 
  <div class="w3-display-bottomleft w3-text-black w3-xlarge" style="padding:24px 48px">
    <a class="w3-large" href="tel:+<?=$contacts[0]->value?>"><i class="fa fa-phone fa-fw w3-large"></i></a>
    <a class="w3-large" href="https://wa.me/<?=$contacts[0]->value?>" target="_blank"><i class="fab fa-whatsapp	w3-text-green fa-fw w3-large"></i></a>
    <a class="w3-large" href="mailto:<?=$contacts[1]->value?>"><i class="fa fa-envelope fa-fw w3-large  w3-text-white"> </i></a>
    <a class="w3-large" href="<?=$contacts[3]->value?>" target="_blank"><i class="fab fa-facebook w3-text-blue fa-fw w3-large"></i></a>
  </div>
</header>
  	<?php if(0)
	{?>
		<button type="button" class="w3-button w3-large w3-teal" onclick="$.get('<?=base_url('edit/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-edit"></i></button>
		<button type="button" class="w3-button w3-large w3-red" onclick="$.get('<?=base_url('del/home/'.$r->id)?>', function(data, status){$('#target').html(data).show();});"><i class="fas fa-trash"></i></button>
	<?php
	}
	}?>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center"><?=$abouts[0]->name?>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
      <?php
    }?>
    </h3>
  <p class="w3-center w3-large"><?=$abouts[0]->desc?></p>
    
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-cogs w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large"><?=$abouts[1]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[1]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
        <p><?=$abouts[1]->desc?></p>
        
    </div>
    <div class="w3-quarter">
      <i class="fas fa-paint-roller w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?=$abouts[2]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[2]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[2]->desc?></p>
    </div>
      
    <div class="w3-quarter">
      <i class="fas fa-award w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><?=$abouts[3]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[3]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[3]->desc?>

</p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-magic w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large"><?=$abouts[4]->name?>
        <?php if(sess()->get('login'))
        {?>
            <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/about/'.$abouts[4]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
        <?php
        }?>
        </p>
      <p><?=$abouts[4]->desc?>
    </div>
  </div>
</div>

<!-- Services Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="services">
  <h3 class="w3-center w3-xxlarge"><?=$services[0]->name?>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/service/'.$services[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
    <?php
    }?>
    </h3>
    <p class="w3-center w3-large"><?=$services[0]->desc?></p>
  
    <div class="w3-row-padding" style="margin-top:64px">
    <?php
        $z=1;
        $e=0;
        foreach($services as $r)
        {
            if($z > 1)
            {
                if($z >4)
                {
                    $e=3;
                }
                else
                {
                    $e=4;
            }?>
        <div class="w3-col l<?=$e?> m6 w3-margin-bottom">
        <div class="w3-card w3-white">
        <img src="<?=base_url('assets/img/service/'.$r->img)?>" style="width:100%">
        <div class="w3-container">
          <h3><?=$r->name?>
            <?php if(sess()->get('login'))
            {?>
                <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/service/'.$r->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>    
            <?php
            }?>
            </h3>
          <p><?=$r->desc?></p>
          <b><a href="https://wa.me/+64211723397" target="_blank" class="w3-button w3-light-grey w3-block"><i class="fab fa-whatsapp w3-text-green w3-large"></i> Contact</a></b>
        </div>
      </div>
    </div>
    <?php
            }
    $z++;
    }?>
        
       
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container" style="padding:16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch</p>
  <div style="margin-top:48px">
    <a class="w3-large" href="tel:+<?=$contacts[0]->value?>"><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> <?=$contacts[0]->name?></a>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/contact/'.$contacts[0]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
    <?php
    }?>
    <br>
    <br>
    <a class="w3-large" href="https://wa.me/<?=$contacts[0]->value?>" target="_blank"><i class="fab fa-whatsapp	w3-text-green fa-fw w3-xxlarge w3-margin-right"></i> +<?=$contacts[0]->value?></a>
    <br>
    <br>
    <a class="w3-large" href="mailto:<?=$contacts[1]->value?>"><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> <?=$contacts[1]->value?></a>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/contact/'.$contacts[1]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
    <?php
    }?>
    <br>
    <br>
    <a href="#contact" class="w3-large"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> <?=$contacts[2]->value?></a>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/contact/'.$contacts[2]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
    <?php
    }?>
    <br>
    <br>
    <a class="w3-large" href="<?=$contacts[3]->value?>" target="_blank"><i class="fab fa-facebook	w3-text-blue fa-fw w3-xxlarge w3-margin-right"></i> <?=$contacts[3]->name?></a>
    <?php if(sess()->get('login'))
    {?>
        <i class="w3-text-blue w3-xlarge fas fa-edit" onclick="load(); $.get('<?=base_url('edit/contact/'.$contacts[3]->id)?>', function(data, status){$('#target').html(data).show();});" style="cursor:pointer"></i>
    <?php
    }?>
      <br>
      <br>
      
    <br>
    <br>
  </div>
</div>
<?= $this->endSection() ?>