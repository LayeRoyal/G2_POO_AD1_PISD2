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
            scrollZone.append('<tr><td>'+ligne.matricule+'</td><td>'+ligne.prenom+'</td><td>'+ligne.nom+'</td><td>'+ligne.telephone+'</td><td>'+ligne.email+'<td><img src="../public/img/edit.png" alt="edit" class="mr-4"><img src="../public/img/delete.png" alt="delete"></td></tr>'
            );
        });
    }
