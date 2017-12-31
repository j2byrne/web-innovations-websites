function productData(productId) {
  'use strict';
  console.log("productId: " + productId);
  var products = [
    {"name": "FenuSave", "img": "img/fenusave.jpg", "text": "FenuSave helps to prevent gastric ulcers"},
    {"name": "FenuCare", "img": "img/fenucare.jpg", "text": "FenuCare helps cure gastric ulcers"},
    {"name": "FenuFeast", "img": "img/fenufeast.jpg", "text": "fenuFeast to enhance appetite"},
    {"name": "FenuCamel", "img": "img/fenucamel.jpg", "text": "FenuCamel helps camels race to victory"},
    {"name": "FenuJoint", "img": "img/test.jpg", "text": "FenuJoint is suitable for the older horse"},
    {"name": "FenuCalm", "img": "img/test.jpg", "text": "FenuCalm helps horses relax"},
    {"name": "FenuLyte", "img": "img/test.jpg", "text": "FenuLyte replaces electrolytes after exercise or travel"},
    {"name": "FenuFoal", "img": "img/test.jpg", "text": "FenuFoal is specially formulated for the younger animal"}
  ];
  
  if (productId == 0) {
    document.getElementById("product-div").innerHTML = '\
      <img class="img" src="' + products[productId].img + '" />\
      <p class="para text-center">' + products[0].text + '</p>\
      <p class="para text-center">FenuSave works in 4 ways…</p>\
      <ul class="text-center">\
        <li>Reduces the acidity of the gastric juices</li>\
        <li>Reduces the quantity of gastric juices</li>\
        <li>Slows down gastric emptying</li>\
        <li>Forms a protective lining on the top half of the horse’s stomach</li>\
      </ul>\
      <p class="para text-center" style="margin-top: 15px">FenuSave contains Potassium, Magnesium, Calcium, Zinc, Manganese, Copper & Iron.</p>\
    ';
  } else if (productId == 1) {
    document.getElementById("product-div").innerHTML = '\
      <img class="img" src="' + products[1].img + '" />\
      <p class="para text-center">' + products[1].text + '</p>\
      <p class="para text-center">fenuCare is a powder form which is sprinkled on top of hard feed which is less stressful than an oral syringe.</p>\
      <p class="para text-center">fenuCare works in a similar way to fenuSave but fenuCare is recommended for use in horses in greater need.</p>\
    ';
  } else if (productId < 8 && productId > 1) {
    document.getElementById("product-div").innerHTML = '<h1 class="text-center">' + products[productId].name + '</h1>';
      if (products[productId].img != "img/test.jpg") {
        document.getElementById("product-div").innerHTML += '\
          <img class="img" src="' + products[productId].img + '" />\
          <p class="para text-center">' + products[productId].text + '</p>\
        ';
      } else {
        document.getElementById("product-div").innerHTML += '\
          <p class="para text-center" style="margin-top: 30px">' + products[productId].text + '</p>\
        ';
      }
  }
  
  document.getElementById("product-div").innerHTML += '<a href="buy-now.php" class="quantity-submit" style="float: left; margin-left: 50px; text-decoration: none">Buy Now</a>';
}