<?php 
require './components/header.layout.php'; 


$products = [1];
?>


<div class="page-content">
  <div class="banner-container">
    <div class="container">
      <h1>Carefully selected perfume products</h1>

      <br />

      <p>
        Our team carefully selects only the best products that have toxic- <br /> 
        free formulas and are not tested on animals.
      </p>
    </div>
  </div>

  <div class="container page-content-padding">
    <div class="shop-header-container">
      <div class="breadcrumb">
        Home &nbsp; / &nbsp;  Browse Products (Shop)
      </div>

      <div class="search-container">
        <select>
          <option value="">Defautl sorting</option>
          <option value="">Sort by price (high to low)</option>
          <option value="">Sort by price (low to high)</option>
        </select>
      </div>
    </div> 

    <div class="row shop-products-container">
      <div class="col sidebar-container">
        <h4>
          FILTER BY CATEGORY
        </h4>

        <br />

        <div class="filter-options">
          <span>
            <input type="checkbox">
          </span>
          &nbsp;
          <span>
            <small>Uncategorized</small>
          </span>
        </div>

        <div class="filter-options">
          <span>
            <input type="checkbox">
          </span>
          &nbsp;
          <span>
            <small>For Men</small>
          </span>
        </div>

        <div class="filter-options">
          <span>
            <input type="checkbox">
          </span>
          &nbsp;
          <span>
            <small>For Women</small>
          </span>
        </div>

        <div class="filter-options">
          <span>
            <input type="checkbox">
          </span>
          &nbsp;
          <span>
            <small>Fashion</small>
          </span>
        </div>
      </div>

      <div class="col products-container">
        <?php 
        if (count($products) === 0) { 
        ?>
          <div class="no-products-container">
            <p>
              &mdash;
              No more products available
              &mdash;
            </p>
          </div>
        <?php 
        } else {
        ?>

        <div class="product-cards-container">
          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume1.jpg" alt="perfume-product-image">
          
            <p>Product 1</p>

            <small>₱ 575.00</small>
          </div>

          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume2.jpg" alt="perfume-product-image">
          
            <p>Product 2</p>

            <small>₱ 575.00</small>
          </div>

          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume3.jpg" alt="perfume-product-image">
          
            <p>Product 3</p>

            <small>₱ 575.00</small>
          </div>

          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume4.jpg" alt="perfume-product-image">
          
            <p>Product 4</p>

            <small>₱ 575.00</small>
          </div>

          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume5.jpg" alt="perfume-product-image">
          
            <p>Product 5</p>

            <small>₱ 575.00</small>
          </div>

          <div class="product-card">
            <img src="http://localhost/projects/rrperfumes/client/assets/images/perfume6.jpg" alt="perfume-product-image">
          
            <p>Product 6</p>

            <small>₱ 575.00</small>
          </div>

          <br />

          
        </div>
        <?php
        }
        ?>
      </div>
    </div>

  </div>
</div>

<?php require_once './components/footer.layout.php'; ?>