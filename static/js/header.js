const btnNav = document.querySelector(".btn-nav");
const primeNav = document.querySelector(".primary-nav");

btnNav.addEventListener("click", () => {
    const visibility = primeNav.getAttribute('data-visible');
    if (visibility === "false") { 
        primeNav.setAttribute('data-visible', true);
        btnNav.setAttribute('aria-expanded', true);
    }
    else if (visibility === "true") {
        primeNav.setAttribute('data-visible', false);
        btnNav.setAttribute('aria-expanded', false);
    }
});