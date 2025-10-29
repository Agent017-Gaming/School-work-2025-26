class Book{
  constructor(id, year, title, author){
    this.id = id;
    this.year = year;
    this.title = title;
    this.author = author;
  }
  
}
class Library{
  constructor(){
    this.books = []
  }
  
  addBook(book){
    this.books.push(book);
  }
  removeBook(id) {
    let remainingBooks = [];
    for (let book of this.books) {
      if (book.id !== id) {
        remainingBooks.push(book);
      }
    }
    this.books = remainingBooks;
  }

  filterBooks(title) {
    const filtro = title.toLowerCase();
    let result = [];
    for (let book of this.books) {
      if (book.title.toLowerCase().includes(filtro)) {
        result.push(book);
      }
    }
    return result;
  }
  getAllBooks(){
    return this.books;
  }
  
}

export { Book, Library }