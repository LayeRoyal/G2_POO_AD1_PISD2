  $(document).ready(function(){
        let offset = 0;
        let limit=8;
        $.ajax({
                type: "POST",
                url: "http://localhost/G2_POO_AD1_PISD2/user/dataEtudiant",
                dataType: "JSON",
                data: {limit:limit,offset:offset},
                success: function (data) {
                    scrollZone.html('')
                    printData(data,scrollZone);
                    offset +=limit;
                }
            });

            //  Scroll
        const scrollZone = $('#ScrollZone')
        //  Zone
        const Zone = $('#Zone')
        Zone.scroll(function(){
        //console.log(scrollZone[0].clientHeight)
        const st = Zone[0].scrollTop;
        const sh = Zone[0].scrollHeight;
        const ch = Zone[0].clientHeight;
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/G2_POO_AD1_PISD2/user/dataEtudiant",
                data: {limit:limit,offset:offset},
                dataType: "JSON",
                success: function (data) {    

                    console.log(ch)
                    printData(data,scrollZone);
                    offset +=limit;
                }
            });
        }
           
        })
    });

    function printData(data,scrollZone){
        $.each(data, function(indice,ligne)
        {
            scrollZone.append('<tr><td>'+ligne.matricule+'</td><td>'+ligne.prenom+'</td><td>'+ligne.nom+'</td><td>'+ligne.telephone+'</td><td>'+ligne.email+'<td><img src="../public/img/edit.png" alt="edit" class="mr-4 modsup" data-toggle="modal" data-target="#'+ligne.matricule+'"><img src="../public/img/delete.png" alt="delete" class="modsup" data-toggle="modal" data-target="#delete'+ligne.matricule+'"><div class="modal fade my-auto" id="delete'+ligne.matricule+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header mt-2"><h4 class="modal-title">Supprimer l\'etudiant.</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body"><h4 class="text-danger text-center">Voulez vous supprimer '+ligne.prenom+' '+ligne.nom+'?</h4></div><div class="modal-footer d-block"><form method="post" enctype="multipart/form-data"><button name="delete" type="submit" class="btn btn-danger float-left" value="'+ligne.matricule+'">OUI</button><button type="button" class="btn btn-default float-right" data-dismiss="modal">NON</button></form></div></div></div></div><div class="modal fade mt-2" id="'+ligne.matricule+'" role="dialog"><form method="post" enctype="multipart/form-data"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h4 class="modal-title">Modifier Etudiant</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body"><div class="form-group"><div class=""><label class="small">Prenom</label><input class="form-control"  name="prenom" value="'+ligne.prenom+'" type="text"/></div><div class=""><label class="small">Nom</label><input class="form-control"  name="nom" value="'+ligne.nom+'" type="text"/></div><div class=""><label class="small">Telephone</label><input class="form-control"  name="telephone" value="'+ligne.telephone+'" type="text"/></div><div class=""><label class="small">Email</label><input class="form-control"  name="email" value="'+ligne.email+'" type="text"/></div><div class=""><label class="small">Bourse</label><select class="form-control"  name="bourse" value="'+ligne.prenom+'"><option value="non">Non</option><option value="demi">Demi</option><option value="entiere">Entière</option></select></div></div></div><div class="modal-footer"><button name="submit" type="submit" class="btn btn-primary mr-4 mx-auto" value="'+ligne.matricule+'">Enregistrer</button><button type="button" class="btn btn-default ml-4" data-dismiss="modal">Close</button></div></div></div></form></div></td></tr>'
            );
        });
    }
