@extends('client.shares.master')
@section('noi_dung')
<section class="page-title">
    <div class="auto-container">
        <h2>Cart Page</h2>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Home</a></li>
            <li>Pages</li>
            <li>Cart Page</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Shoping Cart Section -->
<section class="shoping-cart-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Cart Column -->
            <div class="cart-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!--Cart Outer-->
                    <div class="cart-outer">
                        <div class="table-outer">
                            <table class="cart-table">
                                <thead class="cart-header">
                                    <tr>
                                        <th class="prod-column">product</th>
                                        <th>&nbsp;</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/40.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Logech Headphone</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$32.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£219.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/41.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Asus Vivobook</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$19.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£318.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/42.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Woolen Huddie</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$21.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£12.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/43.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Woolen Huddie</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$46.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£412.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/44.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Woolen Huddie</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$13.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£21.00</td>
                                    </tr>

                                    <tr>
                                        <td colspan="2" class="prod-column">
                                            <div class="column-box">
                                                <figure class="prod-thumb">
                                                    <span class="cross-icon flaticon-cancel-1"></span>
                                                    <a href="#"><img src="images/resource/products/45.png" alt=""></a>
                                                </figure>
                                                <h6 class="prod-title">Woolen Huddie</h6>
                                                <div class="prod-text">Color : Brown <br> Quantity : 2</div>
                                            </div>
                                        </td>

                                        <td class="price">$13.00</td>
                                        <!-- Quantity Box -->
                                        <td class="quantity-box">
                                            <div class="item-quantity">
                                                <input class="qty-spinner" type="text" value="1" name="quantity">
                                            </div>
                                        </td>
                                        <td class="sub-total">£21.00</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Total Column -->
            <div class="total-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Cart Total Outer -->
                    <div class="cart-total-outer">
                        <!-- Title Box -->
                        <div class="title-box">
                            <h6>Cart Totals</h6>
                        </div>
                        <div class="cart-total-box">
                            <ul class="cart-totals">
                                <li>Subtotals : <span>£381.00</span></li>
                                <li>Totals : <span>£381.00</span></li>
                            </ul>
                            <div class="check-box">
                                <input type="checkbox" name="remember-password" id="type-1">
                                <label for="type-1">Shipping & taxes calculated at checkout</label>
                            </div>
                            <!-- Buttons Box -->
                            <div class="buttons-box">
                                <a href="contact.html" class="theme-btn proceed-btn">
                                    Procced To Cheackout
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Total Outer -->
                    <div class="shipping-outer">
                        <!-- Title Box -->
                        <div class="title-box">
                            <h6>Calculate Shipping</h6>
                        </div>
                        <div class="cart-shipping-box">
                            <ul class="shipping-list">
                                <li>Bangladesh</li>
                                <li>Mirpur Dohs Dhaka-1200</li>
                                <li>Postal Code</li>
                            </ul>
                            <!-- Buttons Box -->
                            <div class="buttons-box">
                                <a href="contact.html" class="theme-btn btn-style-one">
                                    Calculate Shiping
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@section('js')

@endsection
