$('.sel-countries').change(function() {
if($(this).val() != 1){
$('.sel-provinces').hide();
}else{
$('.sel-provinces').show();
}
});
