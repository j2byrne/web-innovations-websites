function changeQuantity(sign, inputId) {
  
  var quantity = document.getElementById(inputId).value;
  
  if (sign > 0) {
    quantity++;
  } else if (quantity > 0) {
    quantity--;
  }
  
  document.getElementById(inputId).value = quantity;
};

function negNum(inputId) {
  
  var quantity = document.getElementById(inputId).value;
  
  if (quantity < 0) {
    quantity = 0;
  } 
  
  document.getElementById(inputId).value = quantity;
};