<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();
include_once ('core/functions.php');
include_once ('model/database.php');

if(isset($_GET['cart'])) {
    if($_GET['cart']=='add'){
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = GetProduct($id);
        AddToCart($product,$_GET['qty']);
        ob_start();
        require 'cart-modal.php';
        $cart = ob_get_clean();
        echo json_encode(['code'=>'ok', 'cart'=>$cart]);
    }

    elseif ($_GET['cart']=='show') {
        require 'cart-modal.php';
    }

    elseif ($_GET['cart']=='save') {
    
        if($_SESSION['user_id_s']) {
            foreach ($_SESSION['cart'] as $id=> $item) {
                if(!empty($id) && !empty($item['qty'])) {
                    SaveOrder($_SESSION['user_id_s'],$id,$item['qty']);
                }
            }
            echo '<center style="color:green;font-size: 22px;padding: 20px;">Commande enregistée</center>';
        } else echo 'Commande en cours';
        //require 'cart-modal.php';
    }

    elseif ($_GET['cart']=='clear') {
        if(!empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
            unset($_SESSION['cart.sum']);
            unset($_SESSION['cart.qty']);
        }
        require 'cart-modal.php';
    }

}