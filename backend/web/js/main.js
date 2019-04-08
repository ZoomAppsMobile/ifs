$('.add_options').click(function(e){
    e.preventDefault();
    $('.copyMe').clone().appendTo('.copyTo').attr('class','copyMe_open').show();
});
function remove(obj) {
    $(obj).parent('div').remove();
}