let productContainers = [...document.querySelectorAll('.product-container')];
let nxtBtn = [...document.querySelectorAll('.nxt-btn')];
let preBtn = [...document.querySelectorAll('.pre-btn')];

/**
 * slides the Articles to the left or to the right.
 */
productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth/5;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth/5;
    })
})