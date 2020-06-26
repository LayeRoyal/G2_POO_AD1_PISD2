<div class="">
    <h3 class="titre_page">Enregistrer un Etudiant</h3>
    <div class="midEtud px-4 mt-4 mx-4">
    <form id="formEnrEtudiant">
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance">
        </div>
        <div class="form-group">
            <label for="bourse">Bourse</label>
            <select name="bourse" id="bourse" class="form-control" onChange="choixBourse(this)">
                <option value="choix">Choix</option>
                <option value="Non">Non</option>
                <option value="Demie">Demie</option>
                <option value="Entiere">Entiere</option>
            </select>
        </div>
        <div class="form-group" id="generation1">
          
        </div>
        <div class="form-group" id="generation2">
            
        </div>
        <div  class="form-group p-4 text-center">
            <input type="button" value="Enregistrer" class=' -auto p-2 px-4 w-25 rounded bg-primary text-white '>
        </div>    
    </form>
    <script src="<?=ROOT?>public/js/enrEtudiant.js"></script>

    </div>
</div>
