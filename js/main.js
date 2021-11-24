function scrollTo(elenent) {
    window.scroll({
        left: 0,
        top: elenent.offsetTop - 75,
        behavior: 'smooth'
    })
}
let goto_links = document.querySelectorAll('._goto');
if (goto_links) {
    for (let index = 0; index < goto_links.length; index++) {
        let goto_link = goto_links[index];
        goto_link.addEventListener('click', function (e) {
            let target_block_class = goto_link.getAttribute('href').replace('#', '');
            let target_block = document.querySelector('.' + target_block_class);
            scrollTo(target_block);
            let iconMenu = document.querySelector(".icon-menu");
            let menuBody = document.querySelector(".nav__list");
            iconMenu.classList.remove("_active");
            menuBody.classList.remove("_active");
            e.preventDefault();
        });
    }
}