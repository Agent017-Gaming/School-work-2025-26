import { Library, Book } from "./library.js";
const library = new Library();
library.addBook(new Book(1, 2000, 'Amitav Ghosh', 'The Glass Palace'));
library.addBook(new Book(2, 2005, 'Jack Gilbert', 'Refusing Heaven'));
library.addBook(new Book(3, 2016, 'Yaa Gyasi', 'Homegoing'));

function drawBooks(books){
  const bodyTable = document.getElementById("tbody");
  bodyTable.innerHTML = ""
  books.forEach(b => {
    const row = document.createElement("tr")
  row.innerHTML = `
      <td>${b.id}</td>
      <td>${b.author}</td>
      <td>${b.title}</td>
      <td><button onclick="removeBook(${b.id})">🗑</td>
    `;
    bodyTable.appendChild(row);
  }
  )
}
drawBooks(library.getAllBooks());

function addBook() {
  const id = document.getElementById("inputId").value;
  const year = document.getElementById("inputYr").value;
  const title = document.getElementById("inputTitle").value;
  const author = document.getElementById("inputAuthor").value;
  if(!id || !year || !title || !author){
    alert("Complete all the sector of forms")
    return;
  }
  const exist = library.books.some(b => b.id === id);
  if (exist) {
    alert("The Id looks like it already present on the table");
    return;
  }
  

  const newBook = new Book(id, year, author, title);
  library.addBook(newBook);

  document.getElementById("register").reset();
  drawBooks(library.getAllBooks());
  console.log(library.getAllBooks());
}
function removeBook(id){
  library.removeBook(id);
  drawBooks(library.getAllBooks());
}
function filter() {
  const text = document.getElementById("filterInput").value;
  const filtered = library.filterBooks(text);
  drawBooks(filtered);
}


window.addBook = addBook;
window.removeBook = removeBook;
window.filter = filter;
window.drawBooks = drawBooks;