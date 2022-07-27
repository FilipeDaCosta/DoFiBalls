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

    public function  __construct($boxId, $posX, $posY, $posZ, $articleId, $orderId)
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
     * @return array
     */
    public static function getBoxList(): array
    {
        return self::$boxList;
    }

    /**
     * @param array $boxList
     */
    public static function setBoxList(Box $box): void
    {
        self::$boxList[] = $box;
    }



}