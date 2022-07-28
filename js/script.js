let cartCounter = document.getElementById("cart-counter")

function updateCart(id) {
    if (id =1){
        localStorage.setItem("test", "hihi")
    } else{
        console.log(localStorage.getItem("test"))
    }
    // number = parseInt(cartCounter.innerHTML);
    // number++;
    // cartCounter.innerHTML = number;
}