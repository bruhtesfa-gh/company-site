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
                    if (data.success) {
                        $("#msgSubmit").removeClass("hidden");
                        $('#ajax-contact')[0].reset();
                    } else {
                        $("#msgSubmitError").removeClass("hidden");
                    }
                },
                error: function (error) {
                    $("#msgSubmitError").removeClass("hidden");
                    $('#ajax-contact')[0].reset();
                }
            });
            return false;
        }
    })
});