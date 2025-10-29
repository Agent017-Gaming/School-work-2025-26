function insertValue(){
  let valore = document.getElementById("input").value;
  let select = document.querySelectorAll("td.select");
  select.forEach(td => td.textContent = valore);
}
function align(direction){
  let select = document.querySelectorAll("td.select");
  select.forEach(td => td.style.textAlign = direction);
}
function select(self){
  self.classList.toggle("select");
}
function removeValue(){
  let select = document.querySelectorAll("td.select");
  select.forEach(td => td.textContent = "");
}