'use strict';

/**
 * navbar variables
 */

const navOpenBtn = document.querySelector("[data-menu-open-btn]");
const navCloseBtn = document.querySelector("[data-menu-close-btn]");
const navbar = document.querySelector("[data-navbar]");
const overlay = document.querySelector("[data-overlay]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

for (let i = 0; i < navElemArr.length; i++) {

  navElemArr[i].addEventListener("click", function () {

    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("active");

  });

}



/**
 * header sticky
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {

  window.scrollY >= 10 ? header.classList.add("active") : header.classList.remove("active");

});



/**
 * go top
 */

const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  window.scrollY >= 500 ? goTopBtn.classList.add("active") : goTopBtn.classList.remove("active");

});

















/**
 * Javascript for movie seat booking
 */
 const container = document.querySelector(".container");
 const seats = document.querySelectorAll(".row .seat:not(.sold)");
 const count = document.getElementById("count");
 const total = document.getElementById("total");
 const movieSelect = document.getElementById("movie");
 
 populateUI();
 
 let ticketPrice = +movieSelect.value;
 
 // Save selected movie index and price
 function setMovieData(movieIndex, moviePrice) {
   localStorage.setItem("selectedMovieIndex", movieIndex);
   localStorage.setItem("selectedMoviePrice", moviePrice);
 }
 
 // Update total and count
 function updateSelectedCount() {
   const selectedSeats = document.querySelectorAll(".row .seat.selected");
 
   const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));
 
   localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));
 
   const selectedSeatsCount = selectedSeats.length;
 
   count.innerText = selectedSeatsCount;
   total.innerText = selectedSeatsCount * ticketPrice;
 
   setMovieData(movieSelect.selectedIndex, movieSelect.value);
 }
 
 
 // Get data from localstorage and populate UI
 function populateUI() {
   const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));
 
   if (selectedSeats !== null && selectedSeats.length > 0) {
     seats.forEach((seat, index) => {
       if (selectedSeats.indexOf(index) > -1) {
         console.log(seat.classList.add("selected"));
       }
     });
   }
 
   const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");
 
   if (selectedMovieIndex !== null) {
     movieSelect.selectedIndex = selectedMovieIndex;
     console.log(selectedMovieIndex)
   }
 }
 console.log(populateUI())
 // Movie select event
 movieSelect.addEventListener("change", (e) => {
   ticketPrice = +e.target.value;
   setMovieData(e.target.selectedIndex, e.target.value);
   updateSelectedCount();
 });
 
 // Seat click event
 container.addEventListener("click", (e) => {
   if (
     e.target.classList.contains("seat") &&
     !e.target.classList.contains("sold")
   ) {
     e.target.classList.toggle("selected");
 
     updateSelectedCount();
   }
 });
 
 // Initial count and total set
 updateSelectedCount();