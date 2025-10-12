function toggle(){
  let java = document.getElementById("java")
  let js = document.getElementById("javaScript")
  let buttonDiv = document.getElementById("toggle")
  if (java.style.display !== "none"){
    js.style.display = "block";
    java.style.display = "none";
    buttonDiv.innerHTML = "E Java?"
  } else {
    js.style.display = "none";
    java.style.display = "block";
    buttonDiv.innerText = "E JavaScript?"
  }

}
let lists = document.getElementsByTagName("ul")
function red(){
  
  for (let list of lists){
    list.style.color = "red";
  }
}
function green(){
  for (let list of lists){
    list.style.color = "green";
  }
}
function black(){
  for (let list of lists){
    list.style.color = "black";
  }
}