function submitForm(ev){

   ev.preventDefault()
  let table=document.getElementById("table");
  
  let myFormElementsLength=document.forms["myForm"].elements.length;
  let myFormElements=document.forms["myForm"].elements;
  let arrayError=[];
  let mainError="";
  let hasError=false
  table.innerHTML=""
  for(let i=0;i<myFormElementsLength -1;i++){
    if(myFormElements[i] .value == ""){
        arrayError.push(myFormElements[i].name + " is a empety ");
       // myFormElements[i].style="background-color:red;";
        myFormElements[i].style="border :solid 4px red;";
        myFormElements[i].placeholder=myFormElements[i].name + " is a empety  ";
        mainError += myFormElements[i].name + " is a empety  ";
        hasError=true
    }
    if(myFormElements[i]=="exist"){

      if(!myFormElements["exist"].checked){
        arrayError.push("not exist");
    }
    }
    if(myFormElements[i] .value != ""){
      myFormElements[i].style="";
    }
  }
   
  if(arrayError.length > 0){
    for(let j=0;j<arrayError.length;j++){
      let newElement=document.createElement("div");
     
      newElement.style.width="313px";
      newElement.style.height="72px";
      newElement.style.backgrounColor="aqua";
      newElement.style.marginTop="1px";
      newElement.innerHTML=`<div style="width:200px;height:50px;background-color:yellow;">${arrayError[j]}</div>` ;
      
      table.appendChild(newElement);
      
    }
    //alert(mainError);
  }
  if(!hasError){
    document.forms['myForm'].submit();
  }
}




































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
  //   alert("م,نداریم");
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




// function submitForm(ev){
//   ev.preventDefault();
 
//   let mainError=[];
//   let main=""
//   let productFormElementLenght=document.forms['myForm'].elements.length;
//   let productFormElement=document.forms['productForm'].elements;
//   for(let i=0;i<productFormElementLenght-1;i++){
//     if(productFormElement[i].value==""){
//       mainError.push(productFormElement[i].name + "خالی است");
//     }
//   }
//   if(!productFormElement['exist'].checked){
//      alert("موجودی نداریم");
//       mainError.push("موجودی نداریم");
//   }
//   if(mainError.length > 0){
//       for(let i=0;i< mainError.length ;i++){
//           main += mainError[i];
//       }
//       alert (main);
//   }
//   if(mainError.length == 0){
//      document.forms['productForm'].submit();
//   }
// }
// function submitFromUser(ev){
//     ev.preventDefault();
//     let hasError=false
//     let userFormElementLength=document.forms['userForm'].elements.length;
//     let userFormElements=document.forms['userForm'].elements
//     let table=document.getElementById("table")
//     let list=[] 
//     //console.log(userFormElements.value);
//     for(let i=0;i<userFormElementLength -1;i++){
//         if(userFormElements[i].value ==""){
//             //alert(userFormElements[i].name + "خالی است")
//             list.push(userFormElements[i].name + "خالی است")
//             userFormElements[i].style.backgroundColor="red"
//             userFormElements[i].placeholder="ay baba !!!!!"
//             hasError=true
//         }
//     }
//     if(list.length > 0){
//         let add="";
//         for(let i=0;i<list.length;i++){
//             let newElement=document.createElement('div')
//             newElement.style.width='313px';
//             newElement.style.height='72px'
//             newElement.style.backgroundColor='aqua'
//             newElement.style.marginTop='14px'
//             add +=`<div style="width:200px;float:left;height:50px;background-color:yellow;margin-top:10px;">${list[i]}</div>`
//             newElement.innerHTML=add
//             add=""
//             table.appendChild(newElement);
//         }
//     }
//     if(!hasError){
//         document.forms['userForm'].submit();
//     }   
// }
