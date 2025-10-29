import { Product, ProductList } from "./shopping.js";

// Creiamo due liste: una per i prodotti disponibili e una per il carrello

const productList = new ProductList();

productList.addProduct(new Product(1, "T-shirt", "Maglietta in cotone", 15))
productList.addProduct(new Product(2, "Smartphone", "Telefono Android", 300))
productList.addProduct(new Product(3, "Libro", "Romanzo d'avventura", 20))
productList.addProduct(new Product(4, "Orologio", "Orologio analogico", 50))

function showProducts(products){
  const bodyTable = document.getElementById("productBody");
  bodyTable.innerHTML = ""
  products.forEach(b => {
    const row = document.createElement("tr")
    row.innerHTML = `
      <td>${b.name}</td>
      <td>${b.description}</td>
      <td>${b.cost}</td>
      <td><button onclick="addProduct(${b.id})">Aggiungi</td>
    `;

    bodyTable.appendChild(row);
  });
}

function addProduct(id){
  const prod = productList.getAllProduct().find(p => p.id === id);
  if (prod) {
    productCart.addProduct(new Product(prod.id, prod.name, prod.description, prod.cost));
    showCart(productCart.getAllProduct());
  } 
}

 
const productCart = new ProductList();

function showCart(products){
  const bodyTable = document.getElementById("cartBody");
  bodyTable.innerHTML = ""
  products.forEach(b => {
    const row = document.createElement("tr")
    row.innerHTML = `
      <td>${b.name}</td>
      <td>${b.description}</td>
      <td>${b.cost}</td>
      <td><button onclick="removeProduct(${b.id})">Rimuovi</td>
    `;
    bodyTable.appendChild(row);
  });
}
showCart(productCart.getAllProduct());
function removeProduct(id){
  productCart.removeProduct(id);
  showCart(productCart.getAllProduct());
}

window.addProduct = addProduct;
window.removeProduct = removeProduct;
window.showProducts = showProducts;
window.showCart = showCart;


showProducts(productList.getAllProduct());
showCart(productCart.getAllProduct());