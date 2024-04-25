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



// smooth scrolling animation
// const allLinks = document.querySelectorAll("a:link");

// allLinks.forEach(function (link) {

//   link.addEventListener("click", function (e) {

//     e.preventDefault();

//     const href = link.getAttribute("href");

//     // scroll back to top
//     if (href === "#")
//       window.scrollTo({
//         top: 0,
//         behavior: "smooth",
//     });

//     // scroll to other links
//     if (href !== "#" && href.startsWith("#")) {
//       const sectionEl = document.querySelector(href);
//       sectionEl.scrollIntoView({ behavior: "smooth" });
//     }

//     // close mobile naviagtion
//     if (link.classList.contains("main-nav-link"))
//       headerEl.classList.toggle("nav-open");

//   });

// })