function showedit() {
    let x = document.getElementsByClassName("editshow");
    for (let i = 0; i < x.length; i++) {
        if (x[i].style.display === "block") {
            x[i].style.display = "none";
        } else {
            x[i].style.display = "block";
        }
    }
}