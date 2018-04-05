$(".headercol").click(function () {

    $headercol = $(this);
    //getting the next element
    $('.contentcol').not($(this).next()).slideUp(200);
    $contentcol = $headercol.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $contentcol.slideToggle(200, function () {
        //execute this after slideToggle is done
        //change text of header based on visibility of content div
        //$headercol.text(function () {
            //change text based on condition
            //return $contentcol.is(":visible") ? "Как да се регистрирам в букмейкърска къща bet365?" : "Как да се регистрирам в букмейкърска къща bet365?";
        //});
    });

});