let boxes = [];
let articles = [];

// window.onload = function () {
//     if (localStorage.getItem("articles") === null && localStorage.getItem("boxes") === null){
//         boxes = getData("http://rest.sa/getAllBoxes.php");
//         articles = getData("http://rest.sa/getAllArticles.php");
//         createArticles();
//         createBoxes();
//     }
// }

function getData(url) {
    let pos = [];
    let request = new XMLHttpRequest();
    request.open("GET", url, false);
    request.send();
    if (request.status === 200) {
        try {
            pos = JSON.parse(request.responseText);
        } catch (e) {
            console.log('Error happened here!');
            console.error(e);
        }
    }
    return pos;
}

function createArticles() {
    articles.forEach((article) => {
        new Article(article.article_id, article.description, article.color_id);
    });
    console.log(Article.articleList);
}

function createBoxes() {
    let newbox;
    boxes.forEach((box) => {
        if (box.order_id == null) {
            newbox = new Box(box.box_id, box.box_pos_x, box.box_pos_y, box.box_pos_z, box.article_id, box.order_id);
            Article.articleList.every((article) => {
                if (newbox.artId === article.id) {
                    article.boxes.push(newbox);
                    return false;
                } else {
                    return true;
                }
            });
        }
    });
    console.log(Box.boxList);
}