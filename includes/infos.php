<div class="container">
            <div class="table-responsive-sm">
                <table class="table" style="margin-top:40px;margin-bottom: 100px;">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" colspan="5" class="cours">Listes des Reservations</th>
               
                    </tr>
                    <tr>
                            <th>Nom</th>
                            <th>Cours</th>
                            <th>Numéro de Réservation</th>
                            <th>Date et Heure Réservation</th>
                            <!--th>Action</th-->
                     </tr>
                        </thead>
                        <tbody>
                        <?php while ($data = $request->fetch()) { ?>
                            <tr>
                                <td><?= $data['nom_user'] ?></td>
                                <td><?= $data['nom_prest'] ?></td>
                                <td><?= $data['numResa'] ?></td>
                                <td><?= $data['date_heure_resa'] ?></td>
                                
                               
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    
                </table>
            </div>
        </div>
