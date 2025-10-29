// Classe Product per rappresentare un singolo prodotto
class Product {
  constructor(id, name, description, cost){
    this.id =id;
    this.name = name;
    this.description = description;
    this.cost = cost;
  }
}

// Classe ProductList che contiene una lista di prodotti
class ProductList {
  constructor(){
   this.products = [] 
  }
  addProduct(product){
    this.products.push(product);
  }
  removeProduct(id){
    let remainingProds = [];
    for(let product of this.products){
      if(product.id !== id){
        remainingProds.push(product);
      }
    }
    this.products = remainingProds;
  }
  getAllProduct(){
    return this.products;
  }
  sumProducts(){
    
  } 
}

export { Product, ProductList }