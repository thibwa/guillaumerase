/**
 * Created by thibautwavreille on 30/01/14.
 */

$( document ).ready(function () {
    loadHash();
});

function loadHash(){
    if(window.location.hash){
        $('#menu').children().removeClass('active');
        $(window.location.hash + 'Menu').addClass('active');
    }
}

function loadAndSlide(div) {
    var context = buildContextPath();
	if(div != ""){
		window.location.href = context + "/#" + div;
        loadHash();
	}
}

function loadEntry(entry) {
    var context = buildContextPath();
	if(entry != ""){
		window.location.href = context + '?p=' + entry;
	} else {
		window.location.href = context;
	}
}

function buildContextPath(){
	var context = window.location.protocol + "//" + window.location.hostname;
    if (window.location.href.indexOf('test') != -1) {
        context += "/test";
    }
	return context;
}