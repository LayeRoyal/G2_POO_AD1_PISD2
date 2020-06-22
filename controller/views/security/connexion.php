<div id="connexion-form" class="w-25">
            <div class="connexion-form-header">
                <h3 class="bgPrimary h5 p-3 m-0">Login form</h3>
            </div>

            <div class="connexion-form-body bgWhite p-3">
                <span class="text-danger"><?=@$error?></span>
                <form class="py-2" method="post" action="<?=BASE_URL?>/security/connexion">
                    <div class="form-group ">
                        <input type="text" placeholder="Login" name="login" class="form-control" id="email">
                        
                        <span class="text-danger"><?=@$error['login']?></span>
                    </div>

                    <div class="form-group py-2">
                        <input type="password" placeholder="Password" name="password" class="form-control">
                        <span class="text-danger"><?=@$error['password']?></span>
                    </div>


                    <button type="submit" name="btn_connexion" class="btn btn-primary" value="connexion">Submit</button>
                    <a href="<?=BASE_URL?>/security/vinscription" class="text-secondary pl-5">S'inscrire pour jouer</a>
                </form>
            </div>

        </div>