$(document).ready(function () {

    // Sidebar
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    // Table Trush
    $(".delete").on("click" , function() {
        $(this).parents("tr").remove()
    });

    $(".medicine-big-box-item").css("paddingBottom" ,  $(".medicine-big-box-item .foot").innerHeight());



    // Search Box Hide
    $(".input-search-eq").on("click" , function(e) {

        e.stopPropagation();
        $(".medicine-search .search-box").css("display" , "block");
    });

    $("body").on("click" , function() {
        $(".medicine-search .search-box").css("display" , "none");
    });

    $(".medicine-search .search-box").on("click" , function(e) {
        e.stopPropagation();
    });

    // Popup

    $(".reserve").on("click" , function(){
        $(".popup").css("display" , "block");
    });



});