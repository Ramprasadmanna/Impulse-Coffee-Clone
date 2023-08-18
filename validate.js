function reloadpage() {
  location.reload();
}

function cart() {
  alert("Items Has Been Added To Cart");
}

function validate() {
  var email = document.getElementById("email").value;
  if (email.length <= 0) {
    alert("Email ID Cannot Be Balnk");
  } else {
    alert("Thank You For Your Subscription");
  }
}
