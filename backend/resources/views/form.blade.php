@extends('layouts.generic_template')
  
@section('title')
Covid-19 Form 
@endsection

@section('head')
<link rel="stylesheet" href="\css\style.css">


@section('content')
<div class="container">
    <form id="form" class="form" action="/form" method="POST" onsubmit=" return isValidForm();">
     @csrf
      <h2>Covid-19 Relief Collection&NonBreakingSpace;</h2>
      <div class="form-control">
        <label for="uname">Name:</label>
        <input id="uname" name="uname" type="text" placeholder="Enter your name" required>
        <small>Error</small>
      </div>
      <div class="form-control">
        <label for="phone">Phone Number</label>
        <input id="phone" name="phone" type="text" placeholder="Enter phone number" required>
        <small>Error</small>
      </div>
      <div class="form-control">
        <label for="email">Email:</label>
        <input id="email" name="email" type="text" placeholder="Email" required>
        <small>Error</small>
      </div>
      <div class="form-control">
        <label for="pincode">Pincode:</label>
        <input id="pincode" name ="pincode" type="text" placeholder="Pincode" required>
        <small>Error</small>
      </div>
      <label for="Relief">Select Relief Materials:</label>
      <div class="custom-select" style="width:200px">
        <select id="Relief" name="selectList">
           <option disabled="disabled" selected="selected" value="">Please Select</option>
          <option value="hygiene_kits">Hygiene Kits</option>
          <option value="Soaps">Soaps</option>
          <option value="Sanitary">Sanitary wear</option>
          <option value="Food">Food</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <br>

      <textarea class="desription" id = "desc" name="desc" rows="4"
        cols="50" placeholder="Please write a description of what you are providing..." required></textarea>

      <div class="form-control"><button id="submit" type="submit" value="Submit">Submit</button></div>
     
   
    </form>
  </div>
  <script>
  //Making the select dropdown


    var x, i, j, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("custom-select");
    for (i = 0; i < x.length; i++) {
      selElmnt = x[i].getElementsByTagName("select")[0];
      /*for each element, create a new DIV that will act as the selected item:*/
      a = document.createElement("DIV");
      a.setAttribute("class", "select-selected");
      a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
      x[i].appendChild(a);
      /*for each element, create a new DIV that will contain the option list:*/
      b = document.createElement("DIV");
      b.setAttribute("class", "select-items select-hide");
      for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              for (k = 0; k < y.length; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
        });
        b.appendChild(c);
      }
      x[i].appendChild(b);
      a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
    }
    function closeAllSelect(elmnt) {
      /*a function that will close all select boxes in the document,
      except the current select box:*/
      var x, y, i, arrNo = [];
      x = document.getElementsByClassName("select-items");
      y = document.getElementsByClassName("select-selected");
      for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
          arrNo.push(i)
        } else {
          y[i].classList.remove("select-arrow-active");
        }
      }
      for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
          x[i].classList.add("select-hide");
        }
      }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
  </script>


  <script src="js\validator_script.js"></script>

  @endsection