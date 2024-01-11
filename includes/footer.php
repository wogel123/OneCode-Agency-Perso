<footer class="mt-4">
    <div class="container-md">
        <div class="d-flex">
            <div class="brand d-flex">
                <img class="" src="/webroot/assets/img/logo.svg" alt="">
                <h4>Oncode Agency</h4>
            </div>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="">Créations</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>
        <hr>
        <div class="contact d-flex">
            <p class="d-flex"><i class="fa-solid fa-envelope my-auto me-2"></i> contact@oncode-agency.fr</p>
            <p class="ms-5 d-flex"><i class="fa-solid fa-phone my-auto me-2"></i> 06 66 11 60 12</p>
            <span class="ms-auto">Copyright © 2023 Oncode Agency - Tous droits réservés</span>
        </div>

    </div>
</footer>





<script src="/webroot/lib/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
<script src="/webroot/lib/jquery/3.7.1/js/jquery.min.js"></script>
<script src="/webroot/assets/js/main.js"></script>
<script>
    $(function () {
        $('.form-check-input').click(function(e) {
            $('.form-check-input').not(this).prop('checked', false);
        });
    });
</script>