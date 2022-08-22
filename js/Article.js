/**
 * Object for all articles. The static variable articleList will hold every
 * created article since the object gets pushed into the Array during creation.
 */
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