class Article{
    static articleList = [];
    constructor(id, description, colorId) {
        this.id = id;
        this.description = description;
        this.colorId = colorId;
        this.boxes = [];
        Article.articleList.push(this);
    }
}