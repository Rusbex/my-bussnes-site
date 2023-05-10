let typed = new Typed('.profession', {
    strings: ["Веб разработка", "UI/UX дизайн", "SEO настроика"],
    typeSpeed: 80,
    loop: true,
    startDelay: 200,
    backSpeed: 50,
});

    $(document).ready(function () {

    $(".modal-link").on("click", function () {
        $('.modal-overlay[data-modal-id="' + $(this).data('modal-id') + '"]').addClass("modal-overlay_visible");
    });

    $(".modal__close").on("click", function () {
    $(".modal-overlay").removeClass("modal-overlay_visible");
});

    $(document).on("click", function (e) {
    if (!$(e.target).closest(".modal").length && !$(e.target).closest(".modal-link").length) {
    $(".modal-overlay").removeClass("modal-overlay_visible");
}
});
});


    $(document).ready(function () {
    $("#phone").inputmask({"mask": "+7 (999) 999-99-99"});
});


    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}


    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        autoplay: true,
        autoplayTimeout:3000,
        items:1,
        margin:30,
    });
});


    const hello = "ПРИВЕТ, РАЗ ТЫ ТУТ ЗНАЧИТ ТЫ ШАРИШЬ -> использованый стек Bootstrap + jQury + Laravel";
    console.log(hello);
