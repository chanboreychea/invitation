
//dropdown
const bars = document.querySelector('.head-bars')
const barsdrop = document.querySelector('.barsdrop')
const muilty = document.querySelector('.drop-logo-unclick')
bars.addEventListener("click", function () {
    barsdrop.classList.toggle("active")
})


//searching
let times = document.querySelectorAll('.uil-times')
let btnsearch = document.querySelectorAll('.uil-search')
let search = document.querySelectorAll('.search')

for (let i = 0; i < btnsearch.length; i++) {
    btnsearch[i].addEventListener("click",function(){
        search[i].classList.add("active")
    })

    times[i].addEventListener("click",function(){
        search[i].classList.remove("active")
    })
}



