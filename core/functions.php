<?php

# Methode de reception de la liste des produits
function GetProducts($category="all") {
    global $pdo;
    if($category != "all") {
        $res = $pdo->query("SELECT * FROM sticker WHERE categorie= '$category' " );
        return $res->fetchAll();
    }
    else {
        $res = $pdo->query("SELECT * FROM sticker");
        return $res->fetchAll();
    }
}

# Methode de reception du produit par id produit
function GetProduct($id) {
    global $pdo;
    $res = $pdo->prepare("SELECT * FROM sticker WHERE sticker_id=?");
    $res->execute([$id]);
    return $res->fetch();
}
# Methode de reception de commande par id de l utilisateur
function GetOrders($id_user=1) {
    global $pdo;
    $res = $pdo->query("SELECT * FROM orders WHERE id_user= '$id_user' " );
    return $res->fetchAll();
}

# Methode de sauvegarde de lórdre dans la base de donnée
function SaveOrder($id_user,$id_product, $qty) {
    global $pdo;
    $id_user = (int)$id_user;
    $id_product = (int)$id_product;
    $qty = (int)$qty;
    $query = $pdo->prepare("INSERT INTO orders(id_user,id_product,qty) VALUES (:id_user,:id_product,:qty)");
    $query->bindParam("id_user", $id_user, PDO::PARAM_STR);
    $query->bindParam("id_product", $id_product, PDO::PARAM_STR);
    $query->bindParam("qty", $qty, PDO::PARAM_STR);
    $result = $query->execute();
    if ($result) {
        // Vidage de panier apres avoir sauvegardé la commande
        if(!empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
            unset($_SESSION['cart.sum']);
            unset($_SESSION['cart.qty']);
        }
    }
}


# Methode de rajout du produit dans le panier
function AddToCart($product, $qty=1) {
    if($qty<1) {
        $qty = 1;
        if(isset($_SESSION['cart'][$product['sticker_id']])) {
            $_SESSION['cart'][$product['sticker_id']]['qty'] += 1;
        }
        else
        {
            $_SESSION['cart'][$product['sticker_id']] = [
                'title'=> $product['name'],
                'img' => $product['image'],
                'price' => $product['price'],
                'qty' =>1
            ];
        }
    }
    else {
        if(isset($_SESSION['cart'][$product['sticker_id']])) {
            $_SESSION['cart'][$product['sticker_id']]['qty'] += $qty;
        }
        else
        {
            $_SESSION['cart'][$product['sticker_id']] = [
                'title'=> $product['name'],
                'img' => $product['image'],
                'price' => $product['price'],
                'qty' =>$qty
            ];
        }

    }

    #  quantité totale du produit dans le panier
    if(!empty($_SESSION['cart.qty'])) {
        $_SESSION['cart.qty'] = $qty + $_SESSION['cart.qty'];
    } else $_SESSION['cart.qty'] = 1;
    # somme totale des prix
    if(!empty($_SESSION['cart.sum'])) {
        $_SESSION['cart.sum'] = ($product['price'] * $qty) +  $_SESSION['cart.sum'] ;
    } else $_SESSION['cart.sum'] = $product['price'];
}