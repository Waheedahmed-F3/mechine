<?php include('header.php'); ?>

    <section>
        <div class="section primary-color-background">
            <div class="container">
                <div class="p-t-70 p-b-85">
                    <!-- Heading page-->
                    <div class="heading-page-1">
                        <h3>My Favourities</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section border-bottom-grey">
            <div class="container">
                <div class="breadcrumb-1">
                    <ul>
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="javascript:;">My Favourites</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="page-content p-t-40 p-b-90">
        <div class="container">
            <!--wishlist-cart-1-->
            <div class="woocommerce shopping-cart-1">
                <form class="woocommerce-cart-form" action="#" method="post">
                    <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents shopping-cart-content table-bordered">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">PRODUCT</th>
                                <th class="product-name">NAME & DESCRIPTION</th>
                                <th class="product-price">PRICE</th>
                                <th class="product-status">PRODUCT STATUS</th>
                                <th class="product-atc">ADD TO CART</th>
                                <th class="product-remove"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="woocommerce-cart-form__cart-item cart_item shopping-cart-item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" width="90" src="images/shopping-cart-item-01.jpg" alt="image product" />
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a href="#">Strawberries, 16 oz</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>2.50 / ea</span>
                                </td>
                                <td class="product-status">
                                    <span>In stock</span>
                                </td>
                                <td class="product-atc">
                                    <a href="#">Add To Cart</a>
                                </td>
                                <td class="product-remove">
                                    <a class="remove fa fa-close" href="#"></a>
                                </td>
                            </tr>
                            <tr class="woocommerce-cart-form__cart-item cart_item shopping-cart-item">
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" width="90" src="images/shopping-cart-item-02.jpg" alt="image product" />
                                    </a>
                                </td>
                                <td class="product-name" data-title="Product">
                                    <a href="#">Broccoli, bunch</a>
                                </td>
                                <td class="product-price" data-title="Price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>2.29 /bunch</span>
                                </td>
                                <td class="product-status">
                                    <span>In stock</span>
                                </td>
                                <td class="product-atc">
                                    <a href="#">Add To Cart</a>
                                </td>
                                <td class="product-remove">
                                    <a class="remove fa fa-close" href="#"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!-- end wishlist-cart-1-->
        </div>
    </div>

<?php include('footer.php'); ?>