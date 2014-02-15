function switchTab(el){
    jQuery('.result-tab.active').removeClass('active');
    jQuery(el).parent().addClass('active');
    $('#result_content').children().hide();
    jQuery('#'+jQuery(el).attr('data-toggle')).fadeIn();
}