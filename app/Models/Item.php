<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\Order;
    use App\Models\Product;

class Item extends Model
{
    /**
     *  ITEM ATTRIBUTES
     * $this->attributes["id"] - int - contains the item primary key (id)
     * $this->attributes["quantity"] - int - contains the item quantity
     * $this->attributes["price"] - int - contains the item price
     * $this->attributes["order_id"] - int - contains the item order id
     * $this->attributes["product_id"] - int - contains the item product id
     * $this->attributes["created_at"] - timestamp - contains the item creation date
     * $this->attributes["updated_at"] - timestamp - contains the item update date
     * $this->attributes["order"] - Order - contains associated Order
     * $this->attributes["product"] - Product - contains associated Product
     */

    public static function validate($request)
    {
        $request->validate([
            "quantity"=>"required|numeric|gt:0",
            "price"=>"required|numeric|gt:0",
            "order_id"=>"required|exists:orders,id",
            "product_id"=>"required|exists:products,id",
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }
    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }
    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }
    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }
    public function getPrice()
    {
        return $this->attributes['price'];
    }
    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }
    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }
    public function setOrderId($order_id)
    {
        $this->attributes['order_id'] = $order_id;
    }
    public function getProductId()
    {
        return $this->attributes['product_id'];
    }
    public function setProductId($product_id)
    {
        $this->attributes['product_id'] = $product_id;
    }
    public function getCreatedAt()
    {
        return $this->attributes['created_at'];
    }
    public function setCreatedAt($created_at)
    {
        $this->attributes['created_at'] = $created_at;
    }
    public function getUpdatedAt()
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdatedAt($updated_at)
    {
        $this->attributes['updated_at'] = $updated_at;
    }
    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
    public function getOrder()
    {
        return $this->order;
    }
    public function setOrder($order)
    {
        $this->order = $order;
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getProduct()
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }
}
