/**
 * Created by thibautwavreille on 30/01/14.
 */

$( document ).ready(function () {
    jQuery('.result-tab a').bind('click',function(){ switchTab(this); })
});

function switchTab(el){
    jQuery('.result-tab.active').removeClass('active');
    jQuery(el).parent().addClass('active');
    $('#result_content').children().hide();
    jQuery('#'+jQuery(el).attr('data-toggle')).fadeIn();
}