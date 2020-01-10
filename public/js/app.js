//Добавить 1 coin
$('#give_me_coin').click(function () {
    add_coins(1, '#profile_info .info_block .coins strong');
    return false;
});

function add_coins(count = 1, html_element = false) {

    $.ajax({
        type: 'POST',
        url: '/give_me_coin',
        data: 'count='+count,
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if (html_element) $(html_element).html(data);
        },
        error: function () {
            console.log('Error ajax give_me_coin');
        }
    });
}
