window.onload = () => {
    // On va chercher la balise link
    let themeLink = document.getElementById("theme-link")
    let theme = document.getElementById("theme")
    // Y a-t-il un thème stocké dans le localStorage
    if(localStorage.theme != null){
        themeLink.href = `CSS/style_${localStorage.theme}.css`
    }else{
        themeLink.href = "CSS/style_clair.css"
        localStorage.theme = "clair"
    }

    // Ecouteur d'évènement "click" sur la span
    theme.addEventListener("click", function(){
        if (localStorage.theme == "clair") {
            localStorage.theme = "sombre"
            theme.firstElementChild.innerHTML = "<div class='fa fa-sun-o'></div>"
        } else {
            localStorage.theme = "clair"
            theme.firstElementChild.innerHTML = "<div class='fa fa-moon-o'></div>"
        }				
        themeLink.href = `CSS/style_${localStorage.theme}.css`
    })
}
