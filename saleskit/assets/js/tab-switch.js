/* Ajax Load */
$(".tabs li a").click(function(){
    var page = $(this).attr('data-id');
    $('#content').removeClass('feeds');
    $('header').addClass('header-full');
    $('#content').load(page + '.html');
    if (page == "feeds") {
        $('header').addClass('feeds');
    } else if (page == "popular") {
        $('header').addClass('no-border');
    } else if (page == "category") {
        $('header').addClass('hsss');
    } else if (page == "about") {
        $('header').addClass('hasasas');
    } else {
        greeting = "Good evening";
    }
    return false;
});