

$('#post_comment').on('click', function (e) {

    if (confirm("Are you sure you want to add this comment!") == true) {
        $.ajax
        ({
            url: '/comment',
            type: 'post',
            data:{
                "_token": $('#token').val(),
                "content": $('#comment').val(),
                "discussion_id": $('#discussion_id').val()
            },
            success: function ($data) {
                $('#comment').val('');
                location.reload();
            }
        });

    } else {

    }

});

