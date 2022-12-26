<style>
.remove_p_margin_bottom {
    margin-bottom: 0rem;
}

.cart-items {
    /* height: 50vh; */
    overflow-y: auto;
}

.cart-item {
    width: 100%;
    border-bottom: lightgray 1px solid;
    padding: 10px 0;
}

.cart-item:first-of-type {
    border-top: none;
}

/* .cart-item:last-of-type{
		border-bottom: none;
	} */
.cart-item img {
    width: 100px;
    height: 100px;
    object-fit: contain;
}

.cart-item h3 {
    font-size: 16px;
    margin: 0;
    margin-bottom: 2px;
}

.cart-item p,
.cart-item label {
    font-size: 12px;
    color: #818181;
    margin: 0;
}

p.cart-item-price {
    color: #ef4036;
}

.cart-note {
    font-size: 13px;
    margin: 15px 15px 30px 15px;
}

.cart-checkout p {
    font-size: 15px;
    margin-bottom: 5px;
}

.cart-checkout p+h3 {
    font-size: 17px;
    margin-top: 18px;
}

.cart-item input {
    text-align: center;
}

.cart-item button {
    border: none;
    background-color: transparent;
}

@media screen and (max-width: 1200px) and (min-width: 750px) {
    .shopping_btn button {
        width: 100%;
    }
}
</style>
<div class="contact_bg">
    <div class="container-fluid contact_section">
        <div class="row" style="margin:auto">
            <div class="col-12 text-center">
                <h5 class="text-center">Your Shopping Bag</h5>
                <img src="../assets/imagess/hr.png" class=" img-fluid align-content-center" alt="">
                <p class="text-white py-1 mx-5" style="background: black;letter-spacing: 0px;">Severe weather conditions
                    may
                    cause order delays.</p>
            </div>
            <div class="container" style="">
                <div class="row" style="margin:auto">
                    <div class="col-lg-4 px-0 mb-4 px-lg-3">
                        <div class="card cart-checkout p-4">
                            <?php if(isset($customer) && $this->cart->total()){
								?>
                            <h3>Shipping <span class="float-right"><a href="/register">Edit</a></span></h3>
                            <p class="mt-2"><?php echo $customer['address'] ?> </p>

                            <p class="mt-2">City<span class="float-right"
                                    id='totalPrice'><?php echo $customer['city'] ?></span></p>

                            <p class="mt-2">Mobile<span class="float-right"
                                    id='totalPrice'><?php echo $customer['mobile'] ?></span></p>

                            <hr />
                            <h3>Payment Method</h3>
                            <p class="mt-2">Cash on Delivery<span class="float-right" id='totalPrice'><input
                                        type="radio" id="html" name="fav_language" checked
                                        value="Cash on Delivery"></span></p>

                            <!-- <p class="mt-2">Payment Method<span class="float-right"
                                    id='totalPrice'><?php echo $customer['mobile'] ?></span></p> -->
                            <?php
							} ?>
                            <hr />
                            <p class="mt-2">Order Subtotal <span class="float-right"
                                    id='totalPrice'>$<?php echo $this->cart->total(); ?></span></p>
                            <p>Shipping <span class="float-right">$0</span></p>
                            <h3>Cart Total <span class="float-right"
                                    id='grandTotal'>$<?php echo $this->cart->total(); ?></span></h3>
                            <hr>
                            <div class="shopping_btn text-center">
                                <button onClick="checkOut()">Checkout</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 card">
                        <div class="cart-items">
                            <?php foreach ($this->cart->contents() as $items): ?>

                            <div class="cart-item py-4 " id="<?php echo $items['rowid']; ?>">
                                <div class="row align-items-center" style="margin: auto;">
                                    <div class="col-3">
                                        <img src="<?= base_url($items['product_img']) ?>" alt="">
                                    </div>
                                    <div class="col-4">
                                        <h3><?php echo $items['name']; ?> </h3>
                                        <p><?php echo $items['id']; ?></p>
                                        <p><?php echo $items['price']; ?></p>
                                        <!-- <p class="cart-item-price">25% Off: -$156.25</p> -->
                                        <p class="cart-item-price">Your Price: <?php echo $items['price']; ?></p>
                                        <!-- <p>Qty: 1</p> -->
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="form-group">
                                            <label for="">Qtys</label>
                                            <input type="text" class="form-control w-50 m-auto" name="" id="qty"
                                                aria-describedby="helpId"
                                                onChange="updateQty('<?php echo $items['rowid'];?>')" placeholder=""
                                                value="<?php echo $items['qty']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-2 text-center">
                                        <button onClick="removeItem('<?php echo $items['rowid'];?>')"><i
                                                class="fa fa-trash text-danger" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            <p class="cart-note"><b>Note: Items and promotional pricing not reserved until checkout is
                                    completed.</b></p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <script>
    function updateQty(rowid) {
        $.ajax({
            type: "get",
            url: "<?php echo base_url('home/updateCart'); ?>",
            data: {
                rowid: rowid,
                qty: document.getElementById("qty").value
            },
            cache: false,
            success: function(res) {
                if (res) {
                    swal('Update successfully').then(() => {
                        window.location.replace("<?php echo base_url('home/cart'); ?>");
                    })
                }
            }
        });
    }

    function removeItem(rowid) {
        $.ajax({
            type: "get",
            url: "<?php echo base_url('home/removeFromCart'); ?>",
            data: {
                rowid: rowid
            },
            cache: false,
            success: function(res) {
                let data = JSON.parse(res);
                if (data.isRemove) {
                    var totalPrice = 0;
                    document.getElementById(rowid).remove();
                    $('#totalPrice').html("$" + data.totalPrice);
                    $('#grandTotal').html("$" + data.totalPrice);
                    window.location.replace("<?php echo base_url('home/cart'); ?>");
                }
            }
        });
    }

    function checkOut() {
        if (!<?php echo $this->cart->total_items() ?>) {
            swal('Your cart is currently empty.');
            return;
        }

        $.ajax({
            type: "post",
            url: "<?php echo base_url('home/customerDetail'); ?>",
            data: {},
            cache: false,
            success: function(res) {
                if (res) {
                    if (res == 0) {
                        window.location.replace("/login");
                        return;
                    }
                    let jsonRes = JSON.parse(res);

                    $.ajax({
                        type: "post",
                        url: "<?php echo base_url('home/addOrders'); ?>",
                        data: {
                            customerId: jsonRes.id,
                            shippingAddress: jsonRes.address
                        },
                        cache: false,
                        success: function(res1) {
                            if (res1) {
                                swal('Your order has been placed successfully').then(() => {
                                    window.location.replace(
                                        "<?php echo base_url('home/cart'); ?>");
                                })
                                // var totalPrice = 0;
                                // document.getElementById(rowid).remove();
                                // $('#totalPrice').html("$"+data.totalPrice);
                                // $('#grandTotal').html("$"+data.totalPrice);

                            }
                        }
                    });
                }
            }
        });
        return;


    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap" async defer></script>
    </script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</div>