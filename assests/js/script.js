
var count1 = setInterval(fun1)
var c1 = 0
function fun1() {
    var x1 = document.getElementById("twelve").innerHTML = c1++
    if (x1 == 1200) {
        clearInterval(count1);
    }
}

var count2 = setInterval(fun2)
var c2 = 0
function fun2() {
    var x2 = document.getElementById("threefive").innerHTML = c2++
    if (x2 == 305) {
        clearInterval(count2);
    }
}

var count3 = setInterval(fun3)
var c3 = 0
function fun3() {
    var x3 = document.getElementById("four").innerHTML = c3++
    if (x3 == 48) {
        clearInterval(count3);
    }
}

var count4 = setInterval(fun4)
var c4 = 0
function fun4() {
    var x4 = document.getElementById("fifty").innerHTML = c4++
    if (x4 == 50) {
        clearInterval(count4);
    }
}


var sliderMain = document.querySelector('.slider-main');
let item = sliderMain.getElementsByClassName('item');

function next() {
    sliderMain.append(item[0]);
}

function prev() {
    sliderMain.prepend(item[item.length - 1]);
}

setInterval(next, 1500)
