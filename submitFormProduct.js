// function submitFormProduct(ev) {
//   ev.preventDefault();

  // let productFormlength = document.forms["productForm"].elements.length;
  // let productFormElements = document.forms["productForm"].elements;
  //  let element=document.getElementById('table')
  // //let list = document.getElementById("table");
  // let hasError = false;
  // let table = [];
  // let main = "";
  // for (let i = 0; i < productFormlength - 1; i++) {
  //   if (productFormElements[i].value == "") {
  //     productFormElements[i].style = "background-color:red;";
  //     productFormElements[i].placeholder =
  //       productFormElements[i].name + " را وارد کنید";
  //     table.push(productFormElements[i].name + "را وارد کنید");
  //     alert(productFormElements[i].name + "خالی است");
  //     hasError = true;
  //   }
  // }
  // if (!productFormElements["exist"].checked) {
  //   alert("موجودی نداریم");
  //   table.push(" نداریم موجودی");
  //   hasError = true;
  // }
  // if (!hasError) {
  //   document.forms["productForm"].submit();
  // }
  // if (table.length > 0) {
  //    let add=""
  //    for (let k = 0; k < table.length; k++) {
  //       
  //       let newElement=document.createElement("div")
  //       newElement.style.width="240px"
  //       newElement.style.height="25px"
  //       newElement.style.backgroundColor="red"
  //       newElement.style.marginTop="5px"
  //       add += `<div>${table[k]}</div>`
  //       newElement.innerHTML=add
  //       element.appendChild(newElement);
  //       add=""
  //   }
    //console.log(main);
    //list.innerText = main;
   
  //}
  //console.log(document.forms['productForm'].elements.length)
  //console.log(document.forms['productForm']['price'].value);
//   console.log(document.forms['productForm'].elements[1]);
// }




function submitFormProduct(ev){
  ev.preventDefault();
  let mainError=[];
  let main=""
  let productFormElementLenght=document.forms['productForm'].elements.length;
  let productFormElement=document.forms['productForm'].elements;
  for(let i=0;i<productFormElementLenght-1;i++){
    if(productFormElement[i].value==""){
      mainError.push(productFormElement[i].name + "خالی است");
    }
  }
  if(!productFormElement['exist'].checked){
      alert("م نداریم");
      mainError.push("م نداریم");
  }
  if(mainError.length > 0){
      for(let i=0;i< mainError.length ;i++){
          main += mainError[i];
      }
      alert (main);
  }
  if(mainError.length == 0){
     document.forms['productForm'].submit();
  }
  
}
