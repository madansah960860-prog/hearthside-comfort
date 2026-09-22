<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkout | Hearthside Comfort Co.</title>
  <meta name="description" content="One page, one form. Choose your items, fill in your details, and press Place order.">
  <meta name="robots" content="noindex">
  <link rel="canonical" href="https://hearthsidecomfort.com/pages/checkout.php">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Hearthside Comfort Co.">
  <meta property="og:title" content="Checkout | Hearthside Comfort Co.">
  <meta property="og:description" content="One page, one form. Choose your items, fill in your details, and press Place order.">
  <meta property="og:url" content="https://hearthsidecomfort.com/pages/checkout.php">
  <meta property="og:image" content="https://hearthsidecomfort.com/assets/images/brand/og-image.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" href="../assets/images/brand/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<a class="skip" href="#main">Skip to main content</a>
<header class="sitehead">
  <div class="wrap sitehead-inner">
    <p class="head-phone">
      Call to order: <a href="tel:+14045550142">(404) 555-0142</a>
      <span>Mon–Fri 9 AM–6 PM ET</span>
    </p>
    <a class="logo" href="../index.php">
      <img src="../assets/images/brand/logo.svg" alt="" width="44" height="44">
      <span>Hearthside<br>Comfort Co.</span>
    </a>
    <div class="head-right">
      <form class="searchform" action="../pages/shop.php" method="get"
            role="search">
        <div>
          <label for="q">Search products</label>
          <input type="search" id="q" name="q" autocomplete="off">
        </div>
        <button class="btn" type="submit">Search</button>
      </form>
      <a class="cartlink" href="../pages/cart.php">Cart &amp; checkout</a>
    </div>
  </div>
  <nav class="deptbar" aria-label="Departments">
    <div class="wrap">
      <ul>
      <li><a href="../pages/shop.php#easy-on-footwear">Easy-On Footwear</a></li>
      <li><a href="../pages/shop.php#adaptive-clothing">Adaptive Clothing</a></li>
      <li><a href="../pages/shop.php#sleep-and-lounge">Sleep &amp; Lounge</a></li>
      <li><a href="../pages/shop.php#warm-and-cozy">Warm &amp; Cozy</a></li>
      <li><a href="../pages/shop.php#rest-and-relaxation">Rest &amp; Relaxation</a></li>
      <li><a href="../pages/shop.php#everyday-accessories">Everyday Accessories</a></li>
      </ul>
    </div>
  </nav>
</header>
<nav class="crumbs" aria-label="Breadcrumb"><div class="wrap"><ol>
<li><a href="../index.php">Home</a><span class="sep" aria-hidden="true">&rsaquo;</span></li>
<li><a href="cart.php">Cart &amp; checkout</a><span class="sep" aria-hidden="true">&rsaquo;</span></li>
<li><span aria-current="page">Checkout</span></li>
</ol></div></nav><main id="main">
  <div class="wrap">
    <div class="band-head">
      <h1>Checkout</h1>
      <p class="lede">Everything is on this one page, in six numbered steps.
      Nothing is carried between pages, so nothing can get lost along the
      way.</p>
      <p class="required-note">Fields marked <strong>(required)</strong> must be
      filled in. Everything else is optional.</p>
    </div>

    <div class="notice">
      <p><strong>Online payment is being set up and is not switched on yet.</strong>
      Pressing Place order will not charge you and will not place an order. We
      never ask for a card number anywhere on this site.</p>
    </div>

    <form class="checkout" action="checkout-result.php" method="post"
          accept-charset="UTF-8">

      <fieldset id="items">
        <legend>1. Your items</legend>
        <p>Choose up to three items. The first one is required; the other two
        are optional. Item numbers are printed on every product page and in the
        A&ndash;Z list on the <a href="shop.php">Shop All</a> page.</p>
      <div class="itemline">
        <div>
          <label for="item1">Item 1 (required)</label>
          <span class="hint" id="item1-hint">Pick the item you want. The item number is printed on every product page.</span>
          <select id="item1" name="item1"
                  aria-describedby="item1-hint" required>
            <option value="">Choose an item</option>
            <optgroup label="Easy-On Footwear">
              <option value="HC-1001">HC-1001 &ndash; Hearthside Adjustable-Strap Slipper &ndash; $49.99</option>
              <option value="HC-1002">HC-1002 &ndash; Hearthside Wide-Width Walking Shoe &ndash; $64.99</option>
              <option value="HC-1003">HC-1003 &ndash; Hearthside Hands-Free Slip-On Sneaker &ndash; $69.99</option>
              <option value="HC-1004">HC-1004 &ndash; Hearthside Memory Foam Moccasin Slipper &ndash; $44.99</option>
              <option value="HC-1005">HC-1005 &ndash; Hearthside Fleece-Lined Bootie Slipper &ndash; $39.99</option>
              <option value="HC-1006">HC-1006 &ndash; Hearthside Washable Indoor-Outdoor Slip-On &ndash; $42.99</option>
              <option value="HC-1007">HC-1007 &ndash; Hearthside Non-Slip Gripper Socks, 3-Pack &ndash; $18.99</option>
              <option value="HC-1008">HC-1008 &ndash; Hearthside Non-Binding Comfort Socks, 6-Pack &ndash; $22.99</option>
              <option value="HC-1009">HC-1009 &ndash; Hearthside Graduated Compression Socks, 15–20 mmHg &ndash; $24.99</option>
              <option value="HC-1010">HC-1010 &ndash; Hearthside Wide-Width Canvas Slip-On Shoe &ndash; $46.99</option>
              <option value="HC-1011">HC-1011 &ndash; Hearthside Easy-Pull Rain Boot &ndash; $54.99</option>
              <option value="HC-1012">HC-1012 &ndash; Hearthside Stretch-Knit House Shoe &ndash; $34.99</option>
            </optgroup>
            <optgroup label="Adaptive Clothing">
              <option value="HC-1013">HC-1013 &ndash; Hearthside Men&#x27;s Magnetic-Button Shirt &ndash; $54.99</option>
              <option value="HC-1014">HC-1014 &ndash; Hearthside Women&#x27;s Magnetic-Front Blouse &ndash; $52.99</option>
              <option value="HC-1015">HC-1015 &ndash; Hearthside Easy-Zip Cardigan with Pull Ring &ndash; $59.99</option>
              <option value="HC-1016">HC-1016 &ndash; Hearthside Pull-On Elastic-Waist Trouser &ndash; $44.99</option>
              <option value="HC-1017">HC-1017 &ndash; Hearthside Side-Zip Adaptive Pant &ndash; $49.99</option>
              <option value="HC-1018">HC-1018 &ndash; Hearthside Snap-Front Housecoat &ndash; $46.99</option>
              <option value="HC-1019">HC-1019 &ndash; Hearthside Snap-Shoulder Cotton Undershirt &ndash; $24.99</option>
              <option value="HC-1020">HC-1020 &ndash; Hearthside Wrap-Front Knit Top &ndash; $42.99</option>
              <option value="HC-1021">HC-1021 &ndash; Hearthside Hook-and-Loop Fleece Vest &ndash; $47.99</option>
              <option value="HC-1022">HC-1022 &ndash; Hearthside Pull-On Knit Skort &ndash; $39.99</option>
            </optgroup>
            <optgroup label="Sleep &amp; Lounge">
              <option value="HC-1023">HC-1023 &ndash; Hearthside Plush Fleece Robe &ndash; $56.99</option>
              <option value="HC-1024">HC-1024 &ndash; Hearthside Flannel Pajama Set &ndash; $48.99</option>
              <option value="HC-1025">HC-1025 &ndash; Hearthside Cotton Knit Nightgown &ndash; $36.99</option>
              <option value="HC-1026">HC-1026 &ndash; Hearthside Quilted Bed Jacket &ndash; $42.99</option>
              <option value="HC-1027">HC-1027 &ndash; Hearthside Two-Piece Lounge Set &ndash; $52.99</option>
              <option value="HC-1028">HC-1028 &ndash; Hearthside Lightweight Waffle-Knit Robe &ndash; $44.99</option>
              <option value="HC-1029">HC-1029 &ndash; Hearthside Cozy Sleep Socks, 2-Pack &ndash; $16.99</option>
              <option value="HC-1030">HC-1030 &ndash; Hearthside Satin Pillowcase &ndash; $19.99</option>
              <option value="HC-1031">HC-1031 &ndash; Hearthside Contoured Sleep Mask &ndash; $14.99</option>
              <option value="HC-1032">HC-1032 &ndash; Hearthside Breathable Cotton Sheet Set, Queen &ndash; $69.99</option>
            </optgroup>
            <optgroup label="Warm &amp; Cozy">
              <option value="HC-1033">HC-1033 &ndash; Hearthside Heated Throw with Auto Shut-Off &ndash; $79.99</option>
              <option value="HC-1034">HC-1034 &ndash; Hearthside Cable-Knit Throw Blanket &ndash; $44.99</option>
              <option value="HC-1035">HC-1035 &ndash; Hearthside Knit Cowl Neck Warmer &ndash; $26.99</option>
              <option value="HC-1036">HC-1036 &ndash; Hearthside Sherpa Lap Blanket with Pockets &ndash; $39.99</option>
              <option value="HC-1037">HC-1037 &ndash; Hearthside Wearable Fleece Blanket &ndash; $42.99</option>
              <option value="HC-1038">HC-1038 &ndash; Hearthside Knit Beanie &ndash; $18.99</option>
              <option value="HC-1039">HC-1039 &ndash; Hearthside Touchscreen Fleece Gloves &ndash; $19.99</option>
              <option value="HC-1040">HC-1040 &ndash; Hearthside Fleece-Lined Scarf &ndash; $24.99</option>
              <option value="HC-1041">HC-1041 &ndash; Hearthside Knit Shawl Wrap &ndash; $38.99</option>
              <option value="HC-1042">HC-1042 &ndash; Hearthside Fingerless Knit Gloves &ndash; $16.99</option>
              <option value="HC-1043">HC-1043 &ndash; Hearthside Fleece-Lined Leggings &ndash; $32.99</option>
              <option value="HC-1044">HC-1044 &ndash; Hearthside Thermal Crew-Neck Undershirt &ndash; $27.99</option>
            </optgroup>
            <optgroup label="Rest &amp; Relaxation">
              <option value="HC-1045">HC-1045 &ndash; Hearthside Chair Seat Cushion &ndash; $34.99</option>
              <option value="HC-1046">HC-1046 &ndash; Hearthside Small Back Cushion &ndash; $29.99</option>
              <option value="HC-1047">HC-1047 &ndash; Hearthside Firm Bed Pillow, 2-Pack &ndash; $44.99</option>
              <option value="HC-1048">HC-1048 &ndash; Hearthside Travel Neck Pillow &ndash; $24.99</option>
              <option value="HC-1049">HC-1049 &ndash; Hearthside Textured Cushion Cover, 2-Pack &ndash; $27.99</option>
              <option value="HC-1050">HC-1050 &ndash; Hearthside 12-lb Weighted Blanket &ndash; $89.99</option>
              <option value="HC-1051">HC-1051 &ndash; Hearthside Velvet Comfort Pillow, 2-Pack &ndash; $29.99</option>
              <option value="HC-1052">HC-1052 &ndash; Hearthside Slim Seat Pad &ndash; $24.99</option>
            </optgroup>
            <optgroup label="Everyday Accessories">
              <option value="HC-1053">HC-1053 &ndash; Hearthside Large-Face Analog Wristwatch &ndash; $54.99</option>
              <option value="HC-1054">HC-1054 &ndash; Hearthside RFID Cross-Body Wallet &ndash; $34.99</option>
              <option value="HC-1055">HC-1055 &ndash; Hearthside Auto-Open Compact Umbrella &ndash; $26.99</option>
              <option value="HC-1056">HC-1056 &ndash; Hearthside Lightweight Zip-Pocket Tote &ndash; $29.99</option>
            </optgroup>
          </select>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Choose an item from the list.</span></p>
        </div>
        <div>
          <label for="qty1">Quantity</label>
          <span class="hint" id="qty1-hint">1 to 10</span>
          <input type="number" id="qty1" name="qty1" min="1" max="10"
                 value="1" inputmode="numeric" step="1"
                 aria-describedby="qty1-hint">
        </div>
      </div>
      <div class="itemline">
        <div>
          <label for="item2">Item 2 (optional)</label>
          <span class="hint" id="item2-hint">Leave this as “No additional item” if you do not need it.</span>
          <select id="item2" name="item2"
                  aria-describedby="item2-hint">
            <option value="" selected>No additional item</option>
            <optgroup label="Easy-On Footwear">
              <option value="HC-1001">HC-1001 &ndash; Hearthside Adjustable-Strap Slipper &ndash; $49.99</option>
              <option value="HC-1002">HC-1002 &ndash; Hearthside Wide-Width Walking Shoe &ndash; $64.99</option>
              <option value="HC-1003">HC-1003 &ndash; Hearthside Hands-Free Slip-On Sneaker &ndash; $69.99</option>
              <option value="HC-1004">HC-1004 &ndash; Hearthside Memory Foam Moccasin Slipper &ndash; $44.99</option>
              <option value="HC-1005">HC-1005 &ndash; Hearthside Fleece-Lined Bootie Slipper &ndash; $39.99</option>
              <option value="HC-1006">HC-1006 &ndash; Hearthside Washable Indoor-Outdoor Slip-On &ndash; $42.99</option>
              <option value="HC-1007">HC-1007 &ndash; Hearthside Non-Slip Gripper Socks, 3-Pack &ndash; $18.99</option>
              <option value="HC-1008">HC-1008 &ndash; Hearthside Non-Binding Comfort Socks, 6-Pack &ndash; $22.99</option>
              <option value="HC-1009">HC-1009 &ndash; Hearthside Graduated Compression Socks, 15–20 mmHg &ndash; $24.99</option>
              <option value="HC-1010">HC-1010 &ndash; Hearthside Wide-Width Canvas Slip-On Shoe &ndash; $46.99</option>
              <option value="HC-1011">HC-1011 &ndash; Hearthside Easy-Pull Rain Boot &ndash; $54.99</option>
              <option value="HC-1012">HC-1012 &ndash; Hearthside Stretch-Knit House Shoe &ndash; $34.99</option>
            </optgroup>
            <optgroup label="Adaptive Clothing">
              <option value="HC-1013">HC-1013 &ndash; Hearthside Men&#x27;s Magnetic-Button Shirt &ndash; $54.99</option>
              <option value="HC-1014">HC-1014 &ndash; Hearthside Women&#x27;s Magnetic-Front Blouse &ndash; $52.99</option>
              <option value="HC-1015">HC-1015 &ndash; Hearthside Easy-Zip Cardigan with Pull Ring &ndash; $59.99</option>
              <option value="HC-1016">HC-1016 &ndash; Hearthside Pull-On Elastic-Waist Trouser &ndash; $44.99</option>
              <option value="HC-1017">HC-1017 &ndash; Hearthside Side-Zip Adaptive Pant &ndash; $49.99</option>
              <option value="HC-1018">HC-1018 &ndash; Hearthside Snap-Front Housecoat &ndash; $46.99</option>
              <option value="HC-1019">HC-1019 &ndash; Hearthside Snap-Shoulder Cotton Undershirt &ndash; $24.99</option>
              <option value="HC-1020">HC-1020 &ndash; Hearthside Wrap-Front Knit Top &ndash; $42.99</option>
              <option value="HC-1021">HC-1021 &ndash; Hearthside Hook-and-Loop Fleece Vest &ndash; $47.99</option>
              <option value="HC-1022">HC-1022 &ndash; Hearthside Pull-On Knit Skort &ndash; $39.99</option>
            </optgroup>
            <optgroup label="Sleep &amp; Lounge">
              <option value="HC-1023">HC-1023 &ndash; Hearthside Plush Fleece Robe &ndash; $56.99</option>
              <option value="HC-1024">HC-1024 &ndash; Hearthside Flannel Pajama Set &ndash; $48.99</option>
              <option value="HC-1025">HC-1025 &ndash; Hearthside Cotton Knit Nightgown &ndash; $36.99</option>
              <option value="HC-1026">HC-1026 &ndash; Hearthside Quilted Bed Jacket &ndash; $42.99</option>
              <option value="HC-1027">HC-1027 &ndash; Hearthside Two-Piece Lounge Set &ndash; $52.99</option>
              <option value="HC-1028">HC-1028 &ndash; Hearthside Lightweight Waffle-Knit Robe &ndash; $44.99</option>
              <option value="HC-1029">HC-1029 &ndash; Hearthside Cozy Sleep Socks, 2-Pack &ndash; $16.99</option>
              <option value="HC-1030">HC-1030 &ndash; Hearthside Satin Pillowcase &ndash; $19.99</option>
              <option value="HC-1031">HC-1031 &ndash; Hearthside Contoured Sleep Mask &ndash; $14.99</option>
              <option value="HC-1032">HC-1032 &ndash; Hearthside Breathable Cotton Sheet Set, Queen &ndash; $69.99</option>
            </optgroup>
            <optgroup label="Warm &amp; Cozy">
              <option value="HC-1033">HC-1033 &ndash; Hearthside Heated Throw with Auto Shut-Off &ndash; $79.99</option>
              <option value="HC-1034">HC-1034 &ndash; Hearthside Cable-Knit Throw Blanket &ndash; $44.99</option>
              <option value="HC-1035">HC-1035 &ndash; Hearthside Knit Cowl Neck Warmer &ndash; $26.99</option>
              <option value="HC-1036">HC-1036 &ndash; Hearthside Sherpa Lap Blanket with Pockets &ndash; $39.99</option>
              <option value="HC-1037">HC-1037 &ndash; Hearthside Wearable Fleece Blanket &ndash; $42.99</option>
              <option value="HC-1038">HC-1038 &ndash; Hearthside Knit Beanie &ndash; $18.99</option>
              <option value="HC-1039">HC-1039 &ndash; Hearthside Touchscreen Fleece Gloves &ndash; $19.99</option>
              <option value="HC-1040">HC-1040 &ndash; Hearthside Fleece-Lined Scarf &ndash; $24.99</option>
              <option value="HC-1041">HC-1041 &ndash; Hearthside Knit Shawl Wrap &ndash; $38.99</option>
              <option value="HC-1042">HC-1042 &ndash; Hearthside Fingerless Knit Gloves &ndash; $16.99</option>
              <option value="HC-1043">HC-1043 &ndash; Hearthside Fleece-Lined Leggings &ndash; $32.99</option>
              <option value="HC-1044">HC-1044 &ndash; Hearthside Thermal Crew-Neck Undershirt &ndash; $27.99</option>
            </optgroup>
            <optgroup label="Rest &amp; Relaxation">
              <option value="HC-1045">HC-1045 &ndash; Hearthside Chair Seat Cushion &ndash; $34.99</option>
              <option value="HC-1046">HC-1046 &ndash; Hearthside Small Back Cushion &ndash; $29.99</option>
              <option value="HC-1047">HC-1047 &ndash; Hearthside Firm Bed Pillow, 2-Pack &ndash; $44.99</option>
              <option value="HC-1048">HC-1048 &ndash; Hearthside Travel Neck Pillow &ndash; $24.99</option>
              <option value="HC-1049">HC-1049 &ndash; Hearthside Textured Cushion Cover, 2-Pack &ndash; $27.99</option>
              <option value="HC-1050">HC-1050 &ndash; Hearthside 12-lb Weighted Blanket &ndash; $89.99</option>
              <option value="HC-1051">HC-1051 &ndash; Hearthside Velvet Comfort Pillow, 2-Pack &ndash; $29.99</option>
              <option value="HC-1052">HC-1052 &ndash; Hearthside Slim Seat Pad &ndash; $24.99</option>
            </optgroup>
            <optgroup label="Everyday Accessories">
              <option value="HC-1053">HC-1053 &ndash; Hearthside Large-Face Analog Wristwatch &ndash; $54.99</option>
              <option value="HC-1054">HC-1054 &ndash; Hearthside RFID Cross-Body Wallet &ndash; $34.99</option>
              <option value="HC-1055">HC-1055 &ndash; Hearthside Auto-Open Compact Umbrella &ndash; $26.99</option>
              <option value="HC-1056">HC-1056 &ndash; Hearthside Lightweight Zip-Pocket Tote &ndash; $29.99</option>
            </optgroup>
          </select>

        </div>
        <div>
          <label for="qty2">Quantity</label>
          <span class="hint" id="qty2-hint">1 to 10</span>
          <input type="number" id="qty2" name="qty2" min="1" max="10"
                 value="1" inputmode="numeric" step="1"
                 aria-describedby="qty2-hint">
        </div>
      </div>
      <div class="itemline">
        <div>
          <label for="item3">Item 3 (optional)</label>
          <span class="hint" id="item3-hint">Leave this as “No additional item” if you do not need it.</span>
          <select id="item3" name="item3"
                  aria-describedby="item3-hint">
            <option value="" selected>No additional item</option>
            <optgroup label="Easy-On Footwear">
              <option value="HC-1001">HC-1001 &ndash; Hearthside Adjustable-Strap Slipper &ndash; $49.99</option>
              <option value="HC-1002">HC-1002 &ndash; Hearthside Wide-Width Walking Shoe &ndash; $64.99</option>
              <option value="HC-1003">HC-1003 &ndash; Hearthside Hands-Free Slip-On Sneaker &ndash; $69.99</option>
              <option value="HC-1004">HC-1004 &ndash; Hearthside Memory Foam Moccasin Slipper &ndash; $44.99</option>
              <option value="HC-1005">HC-1005 &ndash; Hearthside Fleece-Lined Bootie Slipper &ndash; $39.99</option>
              <option value="HC-1006">HC-1006 &ndash; Hearthside Washable Indoor-Outdoor Slip-On &ndash; $42.99</option>
              <option value="HC-1007">HC-1007 &ndash; Hearthside Non-Slip Gripper Socks, 3-Pack &ndash; $18.99</option>
              <option value="HC-1008">HC-1008 &ndash; Hearthside Non-Binding Comfort Socks, 6-Pack &ndash; $22.99</option>
              <option value="HC-1009">HC-1009 &ndash; Hearthside Graduated Compression Socks, 15–20 mmHg &ndash; $24.99</option>
              <option value="HC-1010">HC-1010 &ndash; Hearthside Wide-Width Canvas Slip-On Shoe &ndash; $46.99</option>
              <option value="HC-1011">HC-1011 &ndash; Hearthside Easy-Pull Rain Boot &ndash; $54.99</option>
              <option value="HC-1012">HC-1012 &ndash; Hearthside Stretch-Knit House Shoe &ndash; $34.99</option>
            </optgroup>
            <optgroup label="Adaptive Clothing">
              <option value="HC-1013">HC-1013 &ndash; Hearthside Men&#x27;s Magnetic-Button Shirt &ndash; $54.99</option>
              <option value="HC-1014">HC-1014 &ndash; Hearthside Women&#x27;s Magnetic-Front Blouse &ndash; $52.99</option>
              <option value="HC-1015">HC-1015 &ndash; Hearthside Easy-Zip Cardigan with Pull Ring &ndash; $59.99</option>
              <option value="HC-1016">HC-1016 &ndash; Hearthside Pull-On Elastic-Waist Trouser &ndash; $44.99</option>
              <option value="HC-1017">HC-1017 &ndash; Hearthside Side-Zip Adaptive Pant &ndash; $49.99</option>
              <option value="HC-1018">HC-1018 &ndash; Hearthside Snap-Front Housecoat &ndash; $46.99</option>
              <option value="HC-1019">HC-1019 &ndash; Hearthside Snap-Shoulder Cotton Undershirt &ndash; $24.99</option>
              <option value="HC-1020">HC-1020 &ndash; Hearthside Wrap-Front Knit Top &ndash; $42.99</option>
              <option value="HC-1021">HC-1021 &ndash; Hearthside Hook-and-Loop Fleece Vest &ndash; $47.99</option>
              <option value="HC-1022">HC-1022 &ndash; Hearthside Pull-On Knit Skort &ndash; $39.99</option>
            </optgroup>
            <optgroup label="Sleep &amp; Lounge">
              <option value="HC-1023">HC-1023 &ndash; Hearthside Plush Fleece Robe &ndash; $56.99</option>
              <option value="HC-1024">HC-1024 &ndash; Hearthside Flannel Pajama Set &ndash; $48.99</option>
              <option value="HC-1025">HC-1025 &ndash; Hearthside Cotton Knit Nightgown &ndash; $36.99</option>
              <option value="HC-1026">HC-1026 &ndash; Hearthside Quilted Bed Jacket &ndash; $42.99</option>
              <option value="HC-1027">HC-1027 &ndash; Hearthside Two-Piece Lounge Set &ndash; $52.99</option>
              <option value="HC-1028">HC-1028 &ndash; Hearthside Lightweight Waffle-Knit Robe &ndash; $44.99</option>
              <option value="HC-1029">HC-1029 &ndash; Hearthside Cozy Sleep Socks, 2-Pack &ndash; $16.99</option>
              <option value="HC-1030">HC-1030 &ndash; Hearthside Satin Pillowcase &ndash; $19.99</option>
              <option value="HC-1031">HC-1031 &ndash; Hearthside Contoured Sleep Mask &ndash; $14.99</option>
              <option value="HC-1032">HC-1032 &ndash; Hearthside Breathable Cotton Sheet Set, Queen &ndash; $69.99</option>
            </optgroup>
            <optgroup label="Warm &amp; Cozy">
              <option value="HC-1033">HC-1033 &ndash; Hearthside Heated Throw with Auto Shut-Off &ndash; $79.99</option>
              <option value="HC-1034">HC-1034 &ndash; Hearthside Cable-Knit Throw Blanket &ndash; $44.99</option>
              <option value="HC-1035">HC-1035 &ndash; Hearthside Knit Cowl Neck Warmer &ndash; $26.99</option>
              <option value="HC-1036">HC-1036 &ndash; Hearthside Sherpa Lap Blanket with Pockets &ndash; $39.99</option>
              <option value="HC-1037">HC-1037 &ndash; Hearthside Wearable Fleece Blanket &ndash; $42.99</option>
              <option value="HC-1038">HC-1038 &ndash; Hearthside Knit Beanie &ndash; $18.99</option>
              <option value="HC-1039">HC-1039 &ndash; Hearthside Touchscreen Fleece Gloves &ndash; $19.99</option>
              <option value="HC-1040">HC-1040 &ndash; Hearthside Fleece-Lined Scarf &ndash; $24.99</option>
              <option value="HC-1041">HC-1041 &ndash; Hearthside Knit Shawl Wrap &ndash; $38.99</option>
              <option value="HC-1042">HC-1042 &ndash; Hearthside Fingerless Knit Gloves &ndash; $16.99</option>
              <option value="HC-1043">HC-1043 &ndash; Hearthside Fleece-Lined Leggings &ndash; $32.99</option>
              <option value="HC-1044">HC-1044 &ndash; Hearthside Thermal Crew-Neck Undershirt &ndash; $27.99</option>
            </optgroup>
            <optgroup label="Rest &amp; Relaxation">
              <option value="HC-1045">HC-1045 &ndash; Hearthside Chair Seat Cushion &ndash; $34.99</option>
              <option value="HC-1046">HC-1046 &ndash; Hearthside Small Back Cushion &ndash; $29.99</option>
              <option value="HC-1047">HC-1047 &ndash; Hearthside Firm Bed Pillow, 2-Pack &ndash; $44.99</option>
              <option value="HC-1048">HC-1048 &ndash; Hearthside Travel Neck Pillow &ndash; $24.99</option>
              <option value="HC-1049">HC-1049 &ndash; Hearthside Textured Cushion Cover, 2-Pack &ndash; $27.99</option>
              <option value="HC-1050">HC-1050 &ndash; Hearthside 12-lb Weighted Blanket &ndash; $89.99</option>
              <option value="HC-1051">HC-1051 &ndash; Hearthside Velvet Comfort Pillow, 2-Pack &ndash; $29.99</option>
              <option value="HC-1052">HC-1052 &ndash; Hearthside Slim Seat Pad &ndash; $24.99</option>
            </optgroup>
            <optgroup label="Everyday Accessories">
              <option value="HC-1053">HC-1053 &ndash; Hearthside Large-Face Analog Wristwatch &ndash; $54.99</option>
              <option value="HC-1054">HC-1054 &ndash; Hearthside RFID Cross-Body Wallet &ndash; $34.99</option>
              <option value="HC-1055">HC-1055 &ndash; Hearthside Auto-Open Compact Umbrella &ndash; $26.99</option>
              <option value="HC-1056">HC-1056 &ndash; Hearthside Lightweight Zip-Pocket Tote &ndash; $29.99</option>
            </optgroup>
          </select>

        </div>
        <div>
          <label for="qty3">Quantity</label>
          <span class="hint" id="qty3-hint">1 to 10</span>
          <input type="number" id="qty3" name="qty3" min="1" max="10"
                 value="1" inputmode="numeric" step="1"
                 aria-describedby="qty3-hint">
        </div>
      </div>
      </fieldset>

      <fieldset>
        <legend>2. Contact details</legend>
        <p>We need these so we can confirm your order and tell you when it
        ships.</p>
        <div class="field">
          <label for="name">Full name (required)</label>
          <span class="hint" id="name-hint">As it should appear on the
            parcel.</span>
          <input type="text" id="name" name="name" autocomplete="name"
                 aria-describedby="name-hint" required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter your full name.</span></p>
        </div>
        <div class="field">
          <label for="email">Email address (required)</label>
          <span class="hint" id="email-hint">For your order confirmation and
            tracking number. Example: name@example.com</span>
          <input type="email" id="email" name="email" autocomplete="email"
                 aria-describedby="email-hint" required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter an email address that includes an @ sign, like name@example.com.</span></p>
        </div>
        <div class="field">
          <label for="phone">Telephone number (required)</label>
          <span class="hint" id="phone-hint">Any format is fine. We only call if
            there is a problem with your order.</span>
          <input type="tel" id="phone" name="phone" autocomplete="tel"
                 aria-describedby="phone-hint" required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter a telephone number we can reach you on.</span></p>
        </div>
      </fieldset>

      <fieldset>
        <legend>3. Delivery address</legend>
        <p>We ship to all 50 states, the District of Columbia, and APO, FPO and
        DPO addresses. We do not ship outside the United States.</p>
        <div class="field field-wide">
          <label for="address1">Street address (required)</label>
          <span class="hint" id="address1-hint">House or building number and
            street name.</span>
          <input type="text" id="address1" name="address1"
                 autocomplete="address-line1" aria-describedby="address1-hint"
                 required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter your street address.</span></p>
        </div>
        <div class="field field-wide">
          <label for="address2">Apartment, suite or unit (optional)</label>
          <span class="hint">Leave blank if you do not need it.</span>
          <input type="text" id="address2" name="address2"
                 autocomplete="address-line2">
        </div>
        <div class="field">
          <label for="city">City (required)</label>
          <span class="hint" id="city-hint">Your town or city.</span>
          <input type="text" id="city" name="city"
                 autocomplete="address-level2" aria-describedby="city-hint"
                 required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter your city.</span></p>
        </div>
        <div class="field">
          <label for="state">State (required)</label>
          <span class="hint" id="state-hint">Choose from the list.</span>
          <select id="state" name="state" autocomplete="address-level1"
                  aria-describedby="state-hint" required>
            <option value="">Choose your state</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
            <option value="AA">AA — Armed Forces Americas</option>
            <option value="AE">AE — Armed Forces Europe, Middle East, Africa, Canada</option>
            <option value="AP">AP — Armed Forces Pacific</option>
          </select>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Choose your state from the list.</span></p>
        </div>
        <div class="field">
          <label for="zip">ZIP code (required)</label>
          <span class="hint" id="zip-hint">5 digits, like 30301. ZIP+4 such as
            30301-1234 also works.</span>
          <input type="text" id="zip" name="zip" autocomplete="postal-code"
                 inputmode="numeric" pattern="[0-9]{5}(-[0-9]{4})?"
                 aria-describedby="zip-hint" required>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Enter a 5-digit ZIP code, like 30301.</span></p>
        </div>
      </fieldset>

      <fieldset>
        <legend>4. Delivery method</legend>
        <p>Choose one.</p>
        <div class="choice">
          <input type="radio" id="delivery-standard" name="delivery"
                 value="standard" required>
          <label for="delivery-standard">
            <strong>Standard — $6.95, or free over
              $75</strong>
            Arrives in 3–7 business days after we ship it. We pack within
            1–2 business days.
          </label>
        </div>
        <div class="choice">
          <input type="radio" id="delivery-expedited" name="delivery"
                 value="expedited">
          <label for="delivery-expedited">
            <strong>Expedited — $18.95</strong>
            Arrives in 2–3 business days after we ship it. Not included in the
            free-shipping threshold.
          </label>
        </div>
      </fieldset>

      <fieldset>
        <legend>5. Payment method</legend>
        <p>Choose one. You will not be asked for any payment details on this
        page.</p>
        <div class="choice">
          <input type="radio" id="payment-card" name="payment" value="card"
                 required>
          <label for="payment-card">
            <strong>Credit or debit card on our payment provider's secure
              page</strong>
            You would be taken to the payment provider's own page to enter your
            card details.
          </label>
        </div>
        <div class="choice">
          <input type="radio" id="payment-paypal" name="payment" value="paypal">
          <label for="payment-paypal">
            <strong>PayPal</strong>
            You would sign in to PayPal to approve the payment.
          </label>
        </div>
        <p><strong>We never ask for your card number on this page.</strong>
        There are no card number, expiry date, security code or billing fields
        anywhere on this website. Card details only ever belong on the payment
        provider's own page.</p>
      </fieldset>

      <fieldset>
        <legend>6. Review and place order</legend>
        <p>Here is what you will be charged, in words:</p>
        <ul class="prose">
          <li>Each item costs the price listed on its product page. That price
          includes every mandatory fee.</li>
          <li>Shipping is $6.95 for standard, free if your items
          come to more than $75, or $18.95 for
          expedited.</li>
          <li>Sales tax is calculated at checkout based on your delivery
          state.</li>
          <li>Nothing else is added. There is no handling charge and no service
          fee.</li>
        </ul>

        <div class="field field-wide">
          <div class="choice">
            <input type="checkbox" id="agree" name="agree" value="on" required>
            <label for="agree">I have read the
              <a href="../policies/return-and-refund-policy.php">Return &amp;
              Refund Policy</a> and the
              <a href="../policies/shipping-policy.php">Shipping Policy</a>.
              (required)</label>
          </div>
          <p class="field-error"><svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><circle cx="12" cy="12" r="9"/><path d="M12 7v6"/><path d="M12 16.5h.01"/></svg><span>Please tick the box to confirm you have read the two policies.</span></p>
        </div>

        <div class="notice">
          <p><strong>Online payment is being set up. Pressing Place order will
          not charge you.</strong></p>
        </div>

        <div class="place-order">
          <button class="btn btn-big" type="submit">Place order</button>
        </div>
        <p class="buy-note"><a href="cart.php">Back to cart</a></p>
      </fieldset>
    </form>
  </div>
</main>
<footer class="sitefoot">
  <div class="wrap">
    <div class="sitefoot-grid">
      <div>
        <h2>Hearthside Comfort Co.</h2>
        <address>
          Hearthside Comfort Co. LLC<br>
          1847 Mercer Way, Suite 120<br>
          Alpharetta, GA 30009<br>
          Phone: <a href="tel:+14045550142">(404) 555-0142</a><br>
          Email: <a href="mailto:help@hearthsidecomfort.com">help@hearthsidecomfort.com</a><br>
          Hours: Mon–Fri 9 AM–6 PM ET
        </address>
        <p>We answer the phone during the hours above. If you would rather order
        by telephone or by mail, see
        <a href="../pages/how-to-order.php">How to Order</a>.</p>
      </div>
      <div>
        <h2>Shop</h2>
        <ul>
          <li><a href="../pages/shop.php">Shop all 56 items</a></li>
          <li><a href="../pages/deals.php">Today's Deals</a></li>
          <li><a href="../pages/how-to-order.php">How to Order</a></li>
          <li><a href="../pages/cart.php">Cart &amp; checkout</a></li>
          <li><a href="../pages/about.php">About Us</a></li>
          <li><a href="../pages/contact.php">Contact &amp; Help Center</a></li>
        </ul>
      </div>
      <div>
        <h2>Policies</h2>
        <ul>
          <li><a href="../policies/return-and-refund-policy.php">Return &amp; Refund Policy</a></li>
          <li><a href="../policies/shipping-policy.php">Shipping Policy</a></li>
          <li><a href="../policies/privacy-policy.php">Privacy Policy</a></li>
          <li><a href="../policies/your-privacy-choices.php">Your Privacy Choices</a></li>
          <li><a href="../policies/cookie-policy.php">Cookie Policy</a></li>
          <li><a href="../policies/terms-of-service.php">Terms of Service</a></li>
          <li><a href="../policies/payment-and-pricing-policy.php">Payment &amp; Pricing Policy</a></li>
          <li><a href="../policies/warranty-and-product-safety.php">Warranty &amp; Product Safety</a></li>
          <li><a href="../policies/accessibility-statement.php">Accessibility Statement</a></li>
          <li><a href="../policies/intellectual-property.php">Intellectual Property</a></li>
        </ul>
        <p class="privacy-choices">
          <a href="../policies/your-privacy-choices.php">Your Privacy Choices</a>
        </p>
      </div>
    </div>
  </div>
  <div class="sitefoot-legal">
    <div class="wrap">
      <p>&copy; 2026 Hearthside Comfort Co. All rights reserved.
      Hearthside Comfort Co. LLC, 1847 Mercer Way, Suite 120, Alpharetta, GA 30009.
      <a href="tel:+14045550142">(404) 555-0142</a> ·
      <a href="mailto:help@hearthsidecomfort.com">help@hearthsidecomfort.com</a> · Mon–Fri 9 AM–6 PM ET</p>
    </div>
  </div>
</footer>
</body>
</html>
