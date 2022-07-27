<?php

class Article
{
    private int $articleId;
    private string $description;
    private int $colorId;
    private string $src;

    private static array $articleList = array();

    public function  __construct($articleId, $description, $colorId, $src)
    {
        $this->articleId = $articleId;
        $this->description = $description;
        $this->colorId = $colorId;
        $this->src = $src;
        self::setArticleList($this);
    }

    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getColorId(): int
    {
        return $this->colorId;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @return array
     */
    public static function getArticleList(): array
    {
        return self::$articleList;
    }

    /**
     * @param array $articleList
     */
    public static function setArticleList(Article $article): void
    {
        self::$articleList[] = $article;
    }

}