if (ingresar == true) {
    const switchButton = document.getElementById("switch");
    var div1 = document.getElementsByClassName("color1")[0];
    var div2 = document.getElementsByClassName("color2")[0];
    var div3 = document.getElementsByClassName("register")[0];
    var div4 = document.getElementsByClassName("login")[0];
    var div5 = document.getElementsByClassName("texto1")[0];
    var div6 = document.getElementsByClassName("texto2")[0];
    switchButton.addEventListener("change", function () {
    if (this.checked) {
        div1.style.backgroundColor = "#1E1927";
        div2.style.backgroundColor = "#352C48";
        div2.style.boxShadow = "0 0px 10px 5px white";
        div3.style.backgroundColor = "white";
        div4.style.backgroundColor = "white";
        div5.style.color = "#352C48";
        div6.style.color = "#352C48";
    } else {
        div1.style.backgroundColor = "white"
        div2.style.backgroundColor = "white"
        div2.style.boxShadow = "0 0px 10px 5px black";
        div3.style.backgroundColor = "#1e1927"
        div4.style.backgroundColor = "#1e1927"
        div5.style.color = "#B5A3D8"
        div6.style.color = "#B5A3D8"
    }
});}

if (sobre_mi == true) {
    const switchButton = document.getElementById("switch");
    var div1 = document.getElementsByClassName("color1")[0];
    var div2 = document.getElementsByClassName("color2")[0];
    switchButton.addEventListener("change", function () {
    if (this.checked) {
        div1.style.backgroundColor = "#1E1927";
        div2.style.backgroundColor = "#352C48";
        div2.style.boxShadow = "0 0px 10px 5px white"
    } else {
        div1.style.backgroundColor = "white";
        div2.style.backgroundColor = "white";
        div2.style.boxShadow = "0 0px 10px 5px black";
    }
    })
}