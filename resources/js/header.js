displayNav();

$(window).scroll(e => {
    displayNav();
})

function displayNav() {
    if ($(window).scrollTop() > 100) {
        $('.sticky-top.navbar').slideDown("fast")
    } else {
        $('.sticky-top.navbar').slideUp("fast")
    }
}
