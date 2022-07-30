let itemsInCart = [ {id: 1, ball: "Red Ball", ammount: 0, available: 0},
                    {id: 2, ball: "Green Ball", ammount: 0, available: 0},
                    {id: 3, ball: "Blue Ball", ammount: 0, available: 0},
                    {id: 4, ball: "Orange Ball", ammount: 0, available: 0},
                    {id: 5, ball: "Yellow Ball", ammount: 0,available: 0}];

function addToCart(id, available) {
    let cartCount = document.getElementById("cart-counter");
    let $itemsInCartAmmount = 0;
    switch (id) {
        case 1:
            if (itemsInCart[0].ammount < available){
                itemsInCart[0].ammount++;
                itemsInCart[0].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 2:
            if (itemsInCart[1].ammount < available){
                itemsInCart[1].ammount++;
                itemsInCart[1].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 3:
            if (itemsInCart[2].ammount < available){
                itemsInCart[2].ammount++;
                itemsInCart[2].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 4:
            if (itemsInCart[3].ammount < available){
                itemsInCart[3].ammount++;
                itemsInCart[3].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 5:
            if (itemsInCart[4].ammount < available){
                itemsInCart[4].ammount++;
                itemsInCart[4].available = available;
            } else {
                alert("No more Items available");
            }
            break;
    }
    itemsInCart.forEach((item)=>{
        $itemsInCartAmmount += item.ammount;
    });
    cartCount.innerHTML = $itemsInCartAmmount;
    addItemsToCart();
}

function addItemsToCart(){
    let cartDiv = document.getElementById("cart-div")
    cartDiv.innerHTML = "";
    itemsInCart.forEach((item)=>{
        if (item.ammount != 0){
            let div = document.createElement("div")
            div.setAttribute("class", "cart-item-div");
            // div.style.border = "solid 1px black"
            div.style.marginBottom = "5px";
            cartDiv.appendChild(div);
            div.innerHTML += "<p class='item-name'>"+ item.ball +"</p>";
            div.innerHTML += "<p class='item-ammount'><input type='image' class='minus-button' src='img/minus.png' onclick='changeItemAmmount(0, "+ item.id +")'>"+ item.ammount+"<input type='image' class='plus-button' src='img/plus.png' onclick='changeItemAmmount(1, "+ item.id +")'></p>";
            div.innerHTML += "<p><input type='image' class='bin-button' src='img/bin.png' onclick='deleteItem()'><p>"
        }
    });
    cartDiv.innerHTML += "<button id='order-button' type='button'>Order</button>"
}

function changeItemAmmount(option, itemId){
    if (option === 0){
        itemsInCart.forEach((item)=>{
            if (item.id == itemId){
                // if (item.ammount < ){
                //
                // }
            }
        });
    }
}

function deleteItem(){

}

function showCart() {
    let footer = document.getElementById("footer");
    let header = document.getElementById("header")
    let node = document.getElementById("cart-div");
    let footerPos = footer.getBoundingClientRect().y + footer.offsetHeight -30;

    console.log(node.style.visibility)
    if (node.style.visibility == 'visible') {
        node.style.visibility = 'hidden';
    }
    else {
        console.log(footerPos)
        node.style.height += footerPos.toString()+"px";
        node.style.visibility = 'visible';
    }
}