<?php
/**
 * Created by PhpStorm.
 * User: sylvanus
 * Date: 18/08/20
 * Time: 17:34
 */
?>

<div class="form-group">
    <label for="ets-nom">Nom entreprise <abbr title="Obligatoire" style="color: red">*</abbr></label>
    <input type="text" class="form-control" name="ets-nom" id="ets-nom" required
           value="<?php if(isset($parameter)) print $parameter['ets_nom'];?>"/>
</div>
<div class="row">
    <div class="col">
        <label for="ets-adress">Adresse <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="text" class="form-control" name="ets-adress" id="ets-adress" required
               value="<?php if(isset($parameter)) print $parameter['ets_adresse'];?>"/>
        <ul id="suggest-adress" class="list-group"></ul>
    </div>
    <div class="col">
        <label for="ets-cp">Code postal <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="text" class="form-control" name="ets-cp" id="ets-cp" required
               value="<?php if(isset($parameter)) print $parameter['ets_code_postal'];?>"/>
    </div>
    <div class="col">
        <label for="ets-ville">Ville <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="text" class="form-control" name="ets-ville" id="ets-ville" required
               value="<?php if(isset($parameter)) print $parameter['ets_ville'];?>"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="ets-siege">Siège social <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="text" class="form-control" name="ets-siege" id="ets-siege" required
               value="<?php if(isset($parameter)) print $parameter['ets_siege_social'];?>"/>
    </div>
    <div class="col">
        <label for="ets-tel">Téléphone <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="text" class="form-control" name="ets-tel" id="ets-tel" required
               value="<?php if(isset($parameter)) print $parameter['ets_telephone'];?>"/>
    </div>
    <div class="col">
        <label for="ets-email">Email <abbr title="Obligatoire" style="color: red">*</abbr></label>
        <input type="email" class="form-control" name="ets-email" id="ets-email" required
               value="<?php if(isset($parameter)) print $parameter['ets_email'];?>"/>
    </div>
</div>
<!-- Reseaux sociaux -->
<div class="row">
    <div class="col">
        <label for="ets-facebook">Facebook</label>
        <input type="text" class="form-control" name="ets-facebook" id="ets-facebook"
               value="<?php if(isset($parameter)) print $parameter['ets_facebook'];?>"/>
    </div>
    <div class="col">
        <label for="ets-twitter">Twitter</label>
        <input type="text" class="form-control" name="ets-twitter" id="ets-twitter"
               value="<?php if(isset($parameter)) print $parameter['ets_twitter'];?>"/>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="ets-instagram">Instagram</label>
        <input type="text" class="form-control" name="ets-instagram" id="ets-instagram"
               value="<?php if(isset($parameter)) print $parameter['ets_instagram'];?>"/>
    </div>
    <div class="col">
        <label for="ets-snap">SnapChat</label>
        <input type="text" class="form-control" name="ets-snap" id="ets-snap"
               value="<?php if(isset($parameter)) print $parameter['ets_snapchat'];?>"/>
    </div>
</div>
