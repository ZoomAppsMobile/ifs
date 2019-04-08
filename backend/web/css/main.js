$('.add_options').click(function(e){
    e.preventDefault();
    $('.copyMe').clone().appendTo('.copyTo').attr('class','copyMe_open').show();
});
function remove(obj) {
    $(obj).parent('div').remove();
}

preventAction = true;
$('.add_margins').click(function(e){
    if (preventAction) e.preventDefault();
    $.ajax({
        type: 'POST',
        url: '/admin/margins-category/find-cell',
        data: $('#margins-form').serialize(),
        success: function(response){
            if(response!=0) $('.errors').html(response);
            if(response==0) preventAction = false;
        },
        error: function(){
            alert('Ошибка');
        }
    });
});