<?php

class Box
{
    private int $boxId;
    private int $posX;
    private int $posY;
    private int $posZ;
    private int $articleId;
    private int $orderId;

    private static array $boxList = array();

    public function __construct($boxId, $posX, $posY, $posZ, $articleId, $orderId)
    {
        $this->boxId = $boxId;
        $this->posX = $posX;
        $this->posY = $posY;
        $this->posZ = $posZ;
        $this->articleId = $articleId;
        $this->orderId = $orderId;
        self::setBoxList($this);
    }

    /**
     * @return int
     */
    public function getBoxId(): int
    {
        return $this->boxId;
    }

    /**
     * @return int
     */
    public function getPosX(): int
    {
        return $this->posX;
    }

    /**
     * @return int
     */
    public function getPosY(): int
    {
        return $this->posY;
    }

    /**
     * @return int
     */
    public function getPosZ(): int
    {
        return $this->posZ;
    }

    /**
     * @return int
     */
    public function getArticleId(): int
    {
        return $this->articleId;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @return array
     */
    public static function getBoxList(): array
    {
        return self::$boxList;
    }

    /**
     * @param Box $box
     */
    public static function setBoxList(Box $box): void
    {
        self::$boxList[] = $box;
    }


}