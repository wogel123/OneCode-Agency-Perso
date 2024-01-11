<?php
require 'includes/header.php';
?>

<section class="contact-s">
    <div class="container-md">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <form class="mt-5">
                    <label class="col-sm-12 col-form-label required">Nom, Prénom</label>
                    <div class="row mb-4">
                        <div class="col-6">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-5 col-form-label required">E-mail</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-5 col-form-label required">Numéro de téléphone</label>
                        <div class="col-4 col-sm-2">
                            <input type="text" class="form-control">
                            <div class="form-text">Indicatif</div>
                        </div>
                        <div class="col-8 col-sm-5">
                            <input type="text" class="form-control">
                            <div class="form-text">Numéro</div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-5 col-form-label">Nom de l'entreprise</label>
                        <div class="col-sm-7">
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-5 col-form-label">Budget</label>
                        <div class="col-sm-7">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    < 100€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    100 à 500€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    500 à 1000€
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">
                                    > 1000€
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-sm-5 col-form-label required">Décrivez votre projet brièvement</label>
                        <div class="col-sm-7">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-text mb-3">Toutes ces informations vont permettre à notre équipe de pouvoir étudier au mieux votre demande et vous accompagner dans votre projet</div>
                    <div class="form-text">Toute prise de contact n'implique aucun engagement.</div>
                    <div class="form-text mb-3">
                        <hr>
                    </div>
                    <div class="col-12 d-flex">
                        <button type="submit" class="btn btn-primary mx-auto w-100">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require 'includes/footer.php';
?>
