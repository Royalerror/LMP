const {
    eq
} = require("lodash")

var container = $('.coverflow')
var elements = $('.coverflow .element')
coverflowPos()
elements.click(function () {
    elements.each(function () {
        $(this).removeClass('active')
    })
    $(this).addClass('active')
    coverflowPos()
})

elements.on('swipeleft', function (e) {
    let spos = $('.coverflow .element.active').index()
    elements.each(function () {
        $(this).removeClass('active')
    })
    if (spos + 1 < elements.length && !elements.eq(spos + 1).hasClass('fake')) {
        elements.eq(spos + 1).addClass('active')
    } else {
        elements.eq(spos).addClass('active')
    }

    coverflowPos()
});
elements.on('swiperight', function (e) {
    let spos = $('.coverflow .element.active').index()
    elements.each(function () {
        $(this).removeClass('active')
    })

    if (spos - 1 >= 0 && !elements.eq(spos - 1).hasClass('fake')) {
        elements.eq(spos - 1).addClass('active')
    } else {
        elements.eq(spos).addClass('active')
    }

    coverflowPos()
});

function coverflowPos() {
    let selected = $('.coverflow .element.active')
    let pos = selected.index()

    elements.each(function () {
        $(this).removeClass(function (index, css) {
            return (css.match(/(^|\s)z\S+/g) || []).join(' ');
        })
        $(this).addClass(`z${Math.abs($(this).index() - pos)}`)
    });
}
