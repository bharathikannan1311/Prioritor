// Side bar - open
function openNav() {
    document.getElementById("mySidebar")
        .style.width = "250px";
    document.getElementById("main")
        .style.marginLeft = "250px";
}
// Side bar close
function closeNav() {
    document.getElementById("mySidebar")
        .style.width = "0";
    document.getElementById("main")
        .style.marginLeft = "0";
}

// Sliders
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function () {
    output1.innerHTML = this.value;
}

var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function () {
    output2.innerHTML = this.value;
}

var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider2.value;

slider3.oninput = function () {
    output3.innerHTML = this.value;
}

// Dropdown
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}