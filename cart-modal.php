<div class="modal-body">
    <?php if(!empty($_SESSION['cart'])) {?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Qty</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($_SESSION['cart'] as $id=> $item) {?>
                <tr>
                    <td><a href=""><img src="/dw18/fansticker/<?= $item['img'] ?>" alt="<?= $item['title'] ?>" width="200"></a></td>
                    <td><a href=""><?= $item['title'] ?></a></td>
                    <td><?= $item['price'] ?></td>
                    <td><?= $item['qty'] ?></td>
                </tr>
            <?php } ?>

            <tr>
                <td colspan="4" align="right">Total produits: <span id="modal-qty"><?=$_SESSION['cart.qty']?></span> <br> Montant total: <?=$_SESSION['cart.sum']?> €</td>
            </tr>
            </tbody>
        </table>
    <?php } else {?>
        Le panier est vide
    <?php }?>
</div>
<div class="modal-footer">
<!--    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
    <a type="button" class="btn btn-danger" id="clear-cart">Vider le panier</a>
    <a class="btn btn-primary" id="pay-cart">Payer</a>
</div>