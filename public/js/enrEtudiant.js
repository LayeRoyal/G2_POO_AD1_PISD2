function choixBourse(sel) {
    let generation1=document.getElementById("generation1");
    if (sel.options[sel.selectedIndex].text=="Non") {
        generation1.innerHTML='<label for="adresse">Adresse</label><input type="text" class="form-control" id="adresse" name="adresse">'
    }
    else {
        generation1.innerHTML='<label for="loge">Logement</label><select name="logement" id="logement" class="form-control" onChange="choixLogement(this)"><option value="choix">Choix</option><option value="Non">Non</option><option value="Oui">Oui</option></select>'
    }
}

function choixLogement(sel) {
    let generation2=document.getElementById("generation2");
    if (sel.options[sel.selectedIndex].text=="Non") {
        generation2.innerHTML='';
    }
    else {
        generation2.innerHTML='<label for="loge">Chambre</label><select name="logement" id="logement" class="form-control" onChange="choixLogement(this)"><option value="chambre1">chambre1</option><option value="chambre2">chambre2</option><option value="chambre3">chambre3</option></select>'
    }
}