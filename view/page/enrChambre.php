<div class="">
    <div class="container text-center pt-2 mt-2">
            <h3>Enregistrer une chambre</h3>       
    </div>

    <div class="px-4 mt-4 mx-2  p-2">
        <div class="form-group p-2">
            <h4 for="" class="">Numéro Batiment</h4>
            <select name="numeroBatiment" id="numeroBatiment" class='form-control text-center'>
                <option value="choix">Choix</option>
                <option value="001">001</option>
                <option value="002">002</option>
                <option value="003">003</option>
                <option value="004">004</option>
                <option value="005">005</option>
            </select>
        </div>
        <div  class="form-group p-2">
            <h4 for="" class="">Type de Chambre</h4>
            <select name="type" id="type" class='form-control text-center'>
                <option value="choix">Choix</option>
                <option value="Individuel">Individuel</option>
                <option value="Deux">À Deux</option>
            </select>
        </div>
        <div  class="form-group p-4 text-center">
            <input type="submit" name="Enregistrer" value="Enregistrer" class=' -auto p-2 px-4 w-25 rounded bg-primary text-white '>
        </div>
        <div  class="form-group text-center">
           <?php
           if(isset($message)){
            echo $message;
           }
           ?>
    </div>
    </div>
</div>