let mobile_menu_icon = document.querySelector(".mobile_menu_icon");
let ul = document.querySelector("ul");
let div = document.querySelector("div");
let menu_status = 0;
let top_line = document.querySelector(".top_line");
let middle_line = document.querySelector(".middle_line");
let bottom_line = document.querySelector(".bottom_line");



mobile_menu_icon.addEventListener("click",()=>{
    if(menu_status === 0){
    ul.style.display = "block";
    menu_status = 1;

    top_line.classList.add("top_line_twist");
    middle_line.classList.add("middle_line_twist");
    bottom_line.classList.add("bottom_line_twist");
    }
    else if(menu_status=== 1){
        ul.style.display = "none";
        menu_status = 0;

        top_line.classList.remove("top_line_twist");
        middle_line.classList.remove("middle_line_twist");
        bottom_line.classList.remove("bottom_line_twist");
    }  
});


let search_icon = document.querySelector(".search_icon")
let search_icon_mobile = document.querySelector(".search_icon_mobile")
let search_bar = document.querySelector(".search_bar")
let close = document.querySelector(".close")

search_icon.addEventListener("click", ()=>{
    search_bar.style.top="0"
});
close.addEventListener("click", ()=>{
    search_bar.style.top="-82px"
});
search_icon_mobile.addEventListener("click", ()=>{
    search_bar.style.top="0"
});
let switchcolour = document.querySelector(".switchcolour");
let header = document.querySelector("header");
let a = document.querySelectorAll("a");
let x = 0;

switchcolour.addEventListener("click", ()=>{
    if(x < 1){
        header.style.background="#fcfcfc";
        a.forEach(a => {
            a.style.color = "#333";
        });
        x = 1;
    }else{
        header.style.background="#333";
        a.forEach(a => {
            a.style.color = "#d5d5d5";
        });
        x = 0;
    }
})

co



// let x, y, z;
// x = 34;
// y = 4;
// z = (x +y)
// document.querySelector("h1").innerHTML = "Result is" +z;