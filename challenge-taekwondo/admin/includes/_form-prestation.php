<!--<form method="post">-->
    <div class="form-group">
        <label for="nom-prestation">Intitulé de la prestation</label>
        <input type="text" class="form-control" placeholder="Nom de la prestation"
               name="nom-prestation" id="nom-prestation" required
                value="<?php if(isset($prestation)) print $prestation['nom_prest'];?>">
        <div class="invalid-feedback">
            Veuillez saisir le nom de la prestation
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="categorie">Catégorie de la prestation</label>
            <select class="form-control custom-select" name="categorie" id="categorie" required>
                <option value="">Selection une categorie</option>
                <option value="adulte" <?php if(isset($prestation) && $prestation['categorie'] == 'adulte'){?>
                        selected <?php }?>>Adulte</option>
                <option value="enfant" <?php if(isset($prestation) && $prestation['categorie'] == 'enfant'){?>
                    selected <?php }?>>Enfant</option>
            </select>
            <div class="invalid-feedback">
                Veuillez selectionner la categorie de la prestation
            </div>
        </div>

        <div class="col">
            <label for="jour">Jour de la prestation</label>
            <select class="form-control custom-select" name="jour" id="jour" required>
                <option value="">Selection du jour</option>
                <option value="mardi" <?php if(isset($prestation) && $prestation['jour'] == 'mardi'){?>
                    selected <?php }?>>Mardi</option>
                <option value="mercredi" <?php if(isset($prestation) && $prestation['jour'] == 'mercredi'){?>
                    selected <?php }?>>Mercredi</option>
                <option value="jeudi" <?php if(isset($prestation) && $prestation['jour'] == 'jeudi'){?>
                    selected <?php }?>>Jeudi</option>
            </select>
            <div class="invalid-feedback">
                Veuillez sélectionner le jour de la prestation
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="debut">Debut de la prestation</label>
            <input type="time" class="form-control"
                   placeholder="Debut de la prestation" name="debut" id="debut" required
                   value="<?php if(isset($prestation)) print $prestation['debut'];?>">
            <div class="invalid-feedback">
                Veuillez saisir le debut de la prestation
            </div>
        </div>
        <div class="col">
            <label for="fin">Fin de la prestation</label>
            <input type="time" class="form-control"
                   placeholder="Fin de la prestation" name="fin" id="fin" required
                   value="<?php if(isset($prestation)) echo $prestation['fin'];?>"/>
            <div class="invalid-feedback">
                Veuillez saisir la fin de la prestation
            </div>
        </div>
    </div>
