$(document).ready(function () {
    $('.overlay').on('click', function () {
        $('ul.navbar-responsive-content').removeClass('active');
        $('.overlay').removeClass('active');
    })

    $('.navbar-r-toggler').on('click', function () {
        $('ul.navbar-responsive-content').addClass('active');
        $('.overlay').addClass('active');
    })
})