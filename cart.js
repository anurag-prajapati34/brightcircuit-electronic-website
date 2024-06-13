let cartProduct = ["hell0"];


///adding value to store array
///before that covert local storage into arrray

function add(name) {
  let pName = document.getElementById(name).textContent;

  //converted array to local storage


    let retrievedString = localStorage.getItem("Products");

    cartProduct = JSON.parse(retrievedString);

  


  cartProduct.push(pName);
  console.log(pName);
  console.log(cartProduct);

  ctols();

 
}

function ctols() {
  jsonstring = JSON.stringify(cartProduct);
  localStorage.setItem("Products", jsonstring);
}

///converting to local storage

function create() {
  retrievedString = localStorage.getItem("Products");

  cartProduct = JSON.parse(retrievedString);
  let cartlength = cartProduct.length;

  for (let i = 0; i < cartlength; i++) {
    let box=document.createElement('div');
    box.classList.add('productContainer');
    document.getElementById('mybody').append(box);

    let pname=document.createElement('h1');
    pname.innerText=cartProduct[i];

    box.append(pname);
  }
}
create();