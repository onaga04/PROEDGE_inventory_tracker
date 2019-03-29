// $(document).on('click', '.delete-inventory', function () {
//
//     let id = $('.delete-inventory').attr('id');
//
//     $.ajax({
//         url: 'database/delete-inventory.php?id=' + id,
//         type: "GET", // not POST, laravel won't allow it
//         success: function (data) {
//             $data = $(data); // the HTML content your controller has produced
//
//             console.log($data);
//             // $('#where_content_will_be_displayed').fadeOut().html($data).fadeIn();
//         }
//     });
// });


$(document).ready(function() {
    $("#add-inventory").click(function(){
        $(".create-form").show();
    });
});


$(document).ready(function() {
    $("#add-student").click(function(){
        $(".create-form").show();
    });
});

$(document).ready(function() {
    $("#create-loan").click(function(){
        $(".create-form").show();
    });
});