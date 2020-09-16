<!--<form method="post">-->
    <div class="form-group" style="margin-top: 25px;">
        <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="" name="email" id="email" required
                value="<?php if(isset($contact)) echo $contact['email'];?>">
        <div class="invalid-feedback">
            oups!!!! verifiez l'adresse
        </div>
    </div>
    <!--div class="form-group" style="margin-top: 25px;">
        <label for="message">Message Reçu</label>
        <input type="message" class="form-control" placeholder=""
               name="message" id="message" required
                value="<?php if(isset($contact)) print $contact['message'];?>" style="height:30%;">
        <div class="invalid-feedback">
            oups!!!!message non retrouvé
        </div>
    </div-->

    <div class="form-group">
        <label for="message">Message Reçu</label>
        <textarea class="form-control"  value=""  id="message" name="message" rows="7" readonly><?php if(isset($contact)) echo $contact['message']; ?></textarea>
        <div class="invalid-feedback">
            oups!!!!message non retrouvé
        </div>

    </div>

      <div class="form-group">
        <label for="reponse">Réponse</label>
        <textarea class="form-control" id="reponse" name="reponse" rows="3"></textarea>
      </div>
 
