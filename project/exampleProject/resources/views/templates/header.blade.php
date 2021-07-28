<header style="background-color: lightgrey" >
    <div class="container">
        <div class="row">

            <div style="border: black solid 1px; min-height:50px;" class="col-lg-2 col-md-2 col-sm-2">
                Logo
            </div>

            <div style="border: black solid 1px; min-height:50px;" class="col-lg-8 col-lg-8 col-sm-8">
                Nav
            </div>

            <div style="border: black solid 1px; min-height:50px;" class="col-lg-1 col-md-1 col-sm-1">
                Login btn
            </div>

            <div style="border: black solid 1px; min-height:50px;" class="col-lg-1 col-md-1 col-sm-1">
                <a href="/shoppingCart">Items in cart: {{ count($cart->items) }}</a>
            </div>

        </div>
    </div>
</header>