/**
 * Created by thibautwavreille on 30/01/14.
 */

$( document ).ready(function () {
    $('.newsByMonth').first().show();
    $('.newsByMonth').first().addClass('active');
    $('.archive-news').find('li').first().find('a').addClass('current');
    jQuery('.archive-news li a').bind('click',function(){ switchArchive(this); })
});

function switchArchive(el){
    jQuery('.newsByMonth.active').removeClass('active');
    jQuery('.archive-news li a.current').removeClass('current');
    jQuery(el).addClass('current');
    $('.newsByMonth').hide();
    jQuery('.'+jQuery(el).attr('data-toggle')).fadeIn();
}