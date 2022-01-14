$(document).ready(function () {
    $('.js-btn-save , .save').click(
        function () {
            let store_url = $('.multishop-modal-color-check').find('a').attr('href');
            if (store_url === undefined && !confirm("ATTENTION vous êtes dans un contexte ALL SHOP, la modification va impacter toutes les boutiques.")) {
                return false;
            }
        }
    );
});