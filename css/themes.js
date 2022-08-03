
document.getElementById("panier").addEventListener("keyup", fpanier)

function fpanier(){
   fpanier=document.getElementById("panier").value
   if (fpanier>1 && fpanier<=10){
   document.getElementById("dpanier").innerHTML= "le nombre est conforme"
   }
   else{
       document.getElementById("dpanier").innerHTML="le nombre n'est pas conforme"
   }
}

function fpanier() {
    confirm("Votre commande a été ajoutee au panier!");
  }