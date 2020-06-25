loading('listEtudiant');
loading('enrEtudiant');
loading('enrChambre');
loading('listChambre');
$(document).ready(function(){ $("#include").load("enrEtudiant.php")});

function loading(lien) {
    $(document).ready(function(){
        $("#"+lien).click(function(){
            $("#include").load(lien+".php");
            $("li").removeClass("active")
            $("#"+lien).addClass("active");
        });
    });    
}
