<div class="cart">
  <div class="cart-dropdown">
    <i></i>
    <span>2</span>
  </div>
  <div class="account">
    <?if ($_SESSION["USER"]["ID"] > 0):?>
      <a href="/personal/"><?=$_SESSION["USER"]["LOGIN"]?></a>
    <?else:?>
      <a href="/auth/">LOG IN</a>
    <?endif?>
  </div>
  <div class="cart-dropdown-list js-cart-dropdown close">
    <div class="cart-dropdown-list-items">

    </div>
    <div class="cart-total">
      Total <span class="total-amount">500</span>
    </div>
    <div class="cart-action">
      <div class="cart-link">
        <a href="/checkout/" class="btn-checkout">Checkout</a>
      </div>
      <div class="cart-link">
        <a href="/cart/" class="btn-cart">Go to cart</a>
      </div>
    </div>
  </div>
</div>