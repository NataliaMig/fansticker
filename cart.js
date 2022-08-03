$(function() {

    // La travail avec lévenement du click ajouter eu panier
    jQuery('.add-to-cart').on('click', function (e) {
        e.preventDefault();
        let id = $(this).data('id');
        let qty = $('.' + id).val();
        $.ajax({
            url: '../cart.php',
            type: 'GET',
            data: {cart: 'add', id: id, qty: qty},
            dataType: 'json',
            success: function (res) {
                if(res.code == "ok") {
                    ShowCart(res.cart);
                }
                else
                {
                    alert(res.cart);
                }
            },
            error: function (){
                alert('error');
            }

        });

    });





    function ShowCart(cart){
        $('#cart-modal .modal-cart-content').html(cart);
        $('#cart-modal').modal();
    }


    // Le show du panier
    $('#get-cart').on('click', function (e) {
        e.preventDefault();
        $.ajax({
            url: '../cart.php',
            type: 'GET',
            data: {cart: 'show'},
            success: function (res) {
                ShowCart(res);
            },
            error: function (){
                alert('error');
            }
        });
    });



    // le travail avec lévenement Vider le panier
    $('#cart-modal .modal-cart-content ').on('click', '#clear-cart' , function () {
        $.ajax({
            url: '../cart.php',
            type: 'GET',
            data: {cart: 'clear'},
            success: function (res) {
                ShowCart(res);
            },
            error: function (){
                alert('error');
            }
        });
    });

    // le travail avec lévenement payer la commande
    $('#cart-modal .modal-cart-content ').on('click', '#pay-cart' , function () {
        $.ajax({
            url: '../cart.php',
            type: 'GET',
            data: {cart: 'save'},
            success: function (res) {
                ShowCart(res);
            },
            error: function (){
                alert('error');
            }
        });
    });


});