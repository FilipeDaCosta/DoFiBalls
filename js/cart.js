let itemsInCart = [{id: 1, ball: "Red Ball", ammount: 0, available: 0},
    {id: 2, ball: "Green Ball", ammount: 0, available: 0},
    {id: 3, ball: "Blue Ball", ammount: 0, available: 0},
    {id: 4, ball: "Orange Ball", ammount: 0, available: 0},
    {id: 5, ball: "Yellow Ball", ammount: 0, available: 0}];

let itemsInCartAmmount = 0;
let isOrder = false;

/**
 * Adds the ordered items to the itemsInCart variable and updates all counters.
 * @param id        The article ID
 * @param available the available ammount of the article
 */
function addToCart(id, available) {
    let cartCount = document.getElementById("cart-counter");
    switch (id) {
        case 1:
            if (itemsInCart[0].ammount < available) {
                itemsInCart[0].ammount++;
                itemsInCart[0].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 2:
            if (itemsInCart[1].ammount < available) {
                itemsInCart[1].ammount++;
                itemsInCart[1].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 3:
            if (itemsInCart[2].ammount < available) {
                itemsInCart[2].ammount++;
                itemsInCart[2].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 4:
            if (itemsInCart[3].ammount < available) {
                itemsInCart[3].ammount++;
                itemsInCart[3].available = available;
            } else {
                alert("No more Items available");
            }
            break;
        case 5:
            if (itemsInCart[4].ammount < available) {
                itemsInCart[4].ammount++;
                itemsInCart[4].available = available;
            } else {
                alert("No more Items available");
            }
            break;
    }
    itemsInCartAmmount = 0;
    itemsInCart.forEach((item) => {
        itemsInCartAmmount += item.ammount;
    });
    cartCount.innerHTML = itemsInCartAmmount;
    addItemsToCart();
}

/**
 * For every ordered article ID an elemnt gets created in the cart list.
 */
function addItemsToCart() {
    let cartDiv = document.getElementById("cart-div");
    cartDiv.innerHTML = "";
    itemsInCart.forEach((item) => {
        if (item.ammount != 0) {
            let div = document.createElement("div");
            div.setAttribute("class", "cart-item-div");
            div.style.marginBottom = "5px";
            cartDiv.appendChild(div);
            div.innerHTML += "<p class='item-name'>" + item.ball + "</p>";
            div.innerHTML += "<p class='item-ammount'><input type='image' class='minus-button' src='img/minus.png' onclick='changeItemAmmount(0, " + item.id + ")'>" + item.ammount + "<input type='image' class='plus-button' src='img/plus.png' onclick='changeItemAmmount(1, " + item.id + ")'></p>";
            div.innerHTML += "<p><input type='image' class='bin-button' src='img/bin.png' onclick='deleteItem(" + item.id + ")'><p>"
        }
    });
    cartDiv.innerHTML += "<button id='order-button' type='button' onclick='order()'>Order</button>"
}

/**
 * Changes to ammount of an article which is already oredere an in the cart
 * @param option    The option(plus or minus)
 * @param itemId    The item ID
 */
function changeItemAmmount(option, itemId) {
    if (option === 0) {
        itemsInCart.forEach((item) => {
            if (item.id == itemId) {
                if (item.ammount > 0) {
                    item.ammount--;
                }
            }
        });
    }
    if (option === 1) {
        itemsInCart.forEach((item) => {
            if (item.id == itemId) {
                if (item.ammount < item.available) {
                    item.ammount++;
                } else {
                    alert("No more items available..");
                }
            }
        });
    }
    addToCart();
    removeOrderButton();
}

/**
 * This function removes the order button when there are no items in the cart
 */
function removeOrderButton() {
    let $itemsInCartAmmount = 0;
    itemsInCart.forEach((item) => {
        $itemsInCartAmmount += item.ammount;
    });
    if ($itemsInCartAmmount === 0) {
        let cartDiv = document.getElementById("order-button");
        cartDiv.remove();
    }
}

/**
 * Deletes an item from the cart
 * @param itemId
 */
function deleteItem(itemId) {
    itemsInCart.forEach((item) => {
        if (item.id == itemId) {
            item.ammount = 0;
        }
    });
    addToCart();
    removeOrderButton();
}

/**
 * Function to hide and show the item Cart
 */
function showCart() {
    let footer = document.getElementById("footer");
    let header = document.getElementById("header")
    let node = document.getElementById("cart-div");
    node.style.backgroundColor = "#f0ce54";
    let footerPos = footer.getBoundingClientRect().y + footer.offsetHeight - 30;
    if (node.style.visibility == 'visible') {
        footer.style.borderBottomRightRadius = "10px";
        footer.style.borderTopRightRadius = "10px";
        header.style.borderBottomRightRadius = "10px";
        header.style.borderTopRightRadius = "10px";
        node.style.visibility = 'hidden';
    } else {
        footer.style.borderBottomRightRadius = "0px";
        footer.style.borderTopRightRadius = "0px";
        header.style.borderBottomRightRadius = "0px";
        header.style.borderTopRightRadius = "0px";
        node.style.height += footerPos.toString() + "px";
        node.style.visibility = 'visible';
    }
}

/**
 * When the customer finished his order and clicked the order button, hes has to confirm the order.
 * If he confirms it, the order gets send to the API.
 */
function order() {
    let itemsInCartAmmount = 0;
    let confirmMessage = "";
    itemsInCart.forEach((item) => {
        itemsInCartAmmount += item.ammount;
    });
    if (itemsInCartAmmount === 1) {
        confirmMessage = "Do you really want to order 1 item?";
    } else {
        confirmMessage = "Do you really want to order " + itemsInCartAmmount + " items?";
    }
    if (confirm(confirmMessage)) {
        let xhr = new XMLHttpRequest();
        let url = "http://az-srv01-mysql-api.switzerlandnorth.cloudapp.azure.com/recieveDataFromFrontEnd.php";
        xhr.open("POST", url, true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.setRequestHeader("Access-Control-Allow-Headers", "*");
        xhr.setRequestHeader("Access-Control-Allow-Origin", "*");
        let data = JSON.stringify(itemsInCart);
        xhr.send(data);
        alert("Order confirmed!");
        isOrder = true;
        location.reload();
    }
}

/**
 * Checks if there is something in the cart and if so, warns the user bfeore refreshing.
 * @returns {string}
 */
window.onbeforeunload = function() {
    if (itemsInCartAmmount != 0 && !isOrder) {
        return "Data will be lost if you leave the page, are you sure?";
    }
};