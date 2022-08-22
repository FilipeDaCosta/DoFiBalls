/**
 * Object for all boxes. The static variable boxList will hold every
 * created box since the object gets pushed into the Array during creation.
 */
class Box{
    static boxList = [];
    constructor(id, x, y, z, artId, ordId) {
        this.id = id;
        this.x = x;
        this.y = y;
        this.z = z;
        this.artId = artId;
        this.ordId = ordId;
        Box.boxList.push(this);
    }
}