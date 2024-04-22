const yearel = document.querySelector(".footer_copyrightbox_yr")
yearel.textContent = new Date().getFullYear();

// make mobile navigation work
const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");

btnNavEl.addEventListener("click", function () {
    headerEl.classList.toggle("nav-open");
});


async function copyLink(url){
    
    try{

        await navigator.clipboard.writeText(url);
        alert("Copied")
    }
    catch (error) {
        console.error(error.message);
    }
}