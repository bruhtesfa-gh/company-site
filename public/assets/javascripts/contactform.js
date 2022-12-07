$(function () {
    "use strict";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#ajax-contact').validator();
    $('#ajax-contact').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "/send-message";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data) {
                    console.log(data)
                    $("#msgSubmit").removeClass("hidden");
                    $('#ajax-contact')[0].reset();
                },
                error: function (error) {
                    console.log(error);
                }
            });
            return false;
        }
    })
});