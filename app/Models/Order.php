<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use App\Models\User;
    use App\Models\Item;

    class Order extends Model{
        /**
         * ORDER ATTRIBUTES
         * $this->attributes["id"] - int - contains the order primary key (id)
         * $this->attributes["total"] - int - contains the order total
         * $this->attributes["user_id"] - int - contains the order user id
         * $this->attributes["created_at"] - timestamp - contains the order creation date
         * $this->attributes["updated_at"] - timestamp - contains the order update date
         * $this->attributes["items"] - array - contains the order items
         * $this->user - User - contains associated User
         * $this->items - Items[] - contains associated Items
         */

         public static function validate($request)
        {
            $request->validate([
                "total"=>"required|numeric|gt:0",
                "user_id"=>"required|exists:users,id",
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
        public function getTotal()
        {
            return $this->attributes['total'];
        }
        public function setTotal($total)
        {
            $this->attributes['total'] = $total;
        }
        public function getUserId()
        {
            return $this->attributes['user_id'];
        }
        public function setUserId($user_id)
        {
            $this->attributes['user_id'] = $user_id;
        }
        public function getCreatedAt()
        {
            return $this->attributes['created_at'];
        }
        public function setCreatedAt($createdAt)
        {
            $this->attributes['created_at'] = $createdAt;
        }
        public function getUpdatedAt()
        {
            return $this->attributes['updated_at'];
        }
        public function setUpdatedAt($updatedAt)
        {
            $this->attributes['updated_at'] = $updatedAt;
        }
        public function user(){
            return $this->belongsTo(User::class);
        }
        public function getUser(){
            return $this->user;
        }
        public function setUser($user){
            $this->user = $user;
        }
        public function items(){
            return $this->hasMany(Item::class);
        }
        public function getItem(){
            return $this->items;
        }
        public function setItem($items){
            $this->items = $items;
        }
    }