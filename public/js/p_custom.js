			
$(document).ready(function() {
"use strict";
$("#menu").mmenu({
"classes": "mm-slide",
"offCanvas": {
"position": "right"
},
"footer": {
"add": true,
"title": "Copyrights 2015 Medical Guide. all rights reserved."
},

"header": {
"title": "Medical Guide",
"add": true,
"update": true
},

});
});


$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('header').addClass("sticky");
    }
    else{
        $('header').removeClass("sticky");
    }
});


$(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        $('.header2').addClass("sticky");
    }
    else{
        $('.header2').removeClass("sticky");
    }
});





 
$(function(){

var $window = $(window);		//Window object

var scrollTime = 0.6;			//Scroll time
var scrollDistance = 235;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

$window.on("mousewheel DOMMouseScroll", function(event){

event.preventDefault();	

var delta = event.originalEvent.wheelDelta/125 || -event.originalEvent.detail/3;
var scrollTop = $window.scrollTop();
var finalScroll = scrollTop - parseInt(delta*scrollDistance);

TweenMax.to($window, scrollTime, {
scrollTo : { y: finalScroll, autoKill:true },
ease: Power1.easeOut,	
autoKill: true,
overwrite: 5							
});

});

});




$(function() {
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

// Variables privadas
var links = this.el.find('.link');
// Evento
links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$prev = $this.prev();

$prev.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.submenu').not($prev).slideUp().parent().removeClass('open');
};
}	

var accordion = new Accordion($('#accordion2'), false);
});






			
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

// Variables privadas
var links = this.el.find('.link');
// Evento
links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();

$next.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.bgcolor-3').not($next).slideUp().parent().removeClass('open');
};
}	

var accordion = new Accordion($('#accordion'), false);




			
$(function() {
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

// Variables privadas
var links = this.el.find('.link');
// Evento
links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();

$next.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.submenu-active').not($next).slideUp().parent().removeClass('open');
$el.find('.submenu').not($next).slideUp().parent().removeClass('open');

};
}	

var accordion = new Accordion($('#why-choose'), false);
});




[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
if( ev.target.value.trim() === '' ) {
classie.remove( ev.target.parentNode, 'input--filled' );
}
}

//date picker
$("#datepicker").datepicker({
inline: true
});


[].slice.call( document.querySelectorAll( 'textarea.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..
if( inputEl.value.trim() !== '' ) {
classie.add( inputEl.parentNode, 'input--filled' );
}

// events:
inputEl.addEventListener( 'focus', onInputFocus );
inputEl.addEventListener( 'blur', onInputBlur );
} );


//date picker
$("#datepicker").datepicker({
inline: true
});




/* jQuery activation and setting options for the tabs*/
var tabbedNav = $("#tabbed-nav").zozoTabs({
orientation: "horizontal",
theme: "silver",
position: "top-left",
size: "medium",
animation: {
duration: 600,
easing: "easeOutQuint",
effects: "fade"
},
defaultTab: "tab1"
});

/* Changing animation effects*/
$("#config input.effects").change(function () {
var effects = $('input[type=radio]:checked').attr("id");
tabbedNav.data("zozoTabs").setOptions({ "animation": { "effects": effects } });
});






$("#owl-demo").owlCarousel({
items :3,
lazyLoad : true,
navigation : true
});



$("#owl-demo4").owlCarousel({
items :3,
lazyLoad : true,
navigation : true
});



$("#owl-demo2").owlCarousel({
autoPlay : 111110,
stopOnHover : true,

paginationSpeed : 1000,
goToFirstSpeed : 2000,
singleItem : true,
autoHeight : true,

});






$("#team-detail").owlCarousel({

navigation : true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true

// "singleItem:true" is a shortcut for:
// items : 1, 
// itemsDesktop : false,
// itemsDesktopSmall : false,
// itemsTablet: false,
// itemsMobile : false

});




$("#services-slide").owlCarousel({

navigation : true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true

// "singleItem:true" is a shortcut for:
// items : 1, 
// itemsDesktop : false,
// itemsDesktopSmall : false,
// itemsTablet: false,
// itemsMobile : false

});


$("#blog-slide").owlCarousel({

navigation : true,
slideSpeed : 300,
paginationSpeed : 400,
singleItem : true

// "singleItem:true" is a shortcut for:
// items : 1, 
// itemsDesktop : false,
// itemsDesktopSmall : false,
// itemsTablet: false,
// itemsMobile : false

});





jQuery(document).ready(function($){
// browser window scroll (in pixels) after which the "back to top" link is shown
var offset = 300,
//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
offset_opacity = 1200,
//duration of the top scrolling animation (in ms)
scroll_top_duration = 1400,
//grab the "back to top" link
$back_to_top = $('.cd-top');

//hide or show the "back to top" link
$(window).scroll(function(){
( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
if( $(this).scrollTop() > offset_opacity ) { 
$back_to_top.addClass('cd-fade-out');
}
});

//smooth scroll to top
$back_to_top.on('click', function(event){
event.preventDefault();
$('body,html').animate({
scrollTop: 0 ,
}, scroll_top_duration
);
});

});





//Procedures Links
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

// Variables privadas
var links = this.el.find('.link');
// Evento
links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();

$next.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
};
}	

var accordion = new Accordion($('#procedures-links'), false);



//Procedures FAQ'S
var Accordion = function(el, multiple) {
this.el = el || {};
this.multiple = multiple || false;

// Variables privadas
var links = this.el.find('.link');
// Evento
links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
}

Accordion.prototype.dropdown = function(e) {
var $el = e.data.el;
$this = $(this),
$next = $this.next();

$next.slideToggle();
$this.parent().toggleClass('open');

if (!e.data.multiple) {
$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
};
}	

var accordion = new Accordion($('#procedures-faq'), false);


//PreLoader
jQuery(window).load(function() { // makes sure the whole site is loaded
jQuery('#status').fadeOut(); // will first fade out the loading animation
jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
jQuery('body').delay(350).css({'overflow':'visible'});
})








// Appointment newsletter contact Form	
function checkcontact(input)
{
var pattern1=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(pattern1.test(input))
{
return true;
}
else{
return false;
}
}

function validateAppointment(){
//alert('hi');
var errors = "";

var app_name = document.getElementById("input-29"); 	
var app_email_address = document.getElementById("input-30");
var app_date = document.getElementById("datepicker");

if(app_name.value == ""){
errors+= 'Please provide your name.';
}
else if(app_email_address.value == ""){
errors+= 'Please provide an email address.';
}
else if(checkcontact(app_email_address.value) == false){
errors+= 'Please provide a valid email address.';
}		
else if(app_date.value == ""){
errors+= 'Please select an appointment date.';
}


if(errors)
{
document.getElementById("error").style.display = "block";
document.getElementById("error").innerHTML = errors;
return false;				
}

else{

$.ajax({
type: "POST",
url: 'process.php',
data: $("#appointment_form").serialize(),
success: function(msg)
{
if(msg == 'success') 
{	
document.getElementById("error").style.display = "none";
document.getElementById("input-29").value = "";
document.getElementById("input-30").value = "";
document.getElementById("datepicker").value = "";
document.getElementById("input-31").value = "";
document.getElementById("textarea").value = "";
$("#appointment_form").hide();
document.getElementById("success").style.display = "block";
document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
}else{
document.getElementById("error").style.display = "block";
document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
}		
}

});

}
}

function validateSubscription(){
//alert('hi');

var footer_name = document.getElementById("subscribe_name"); 	
var footer_email_address = document.getElementById("subscribe_email");

if(footer_name.value == ""){
footer_name.className = "input error";
return false;
}
else if(footer_email_address.value == ""){
footer_email_address.className = "input error";
return false;
}
else if(checkcontact(footer_email_address.value) == false){
footer_email_address.className = "input error";
return false;
}		
else{

$.ajax({
type: "POST",
url: 'process.php',
data: $("#subscribe_form").serialize(),
success: function(msg)
{
if(msg == 'success') 
{	
footer_name.className = "input";
footer_name.value = "";
footer_email_address.className = "input";
footer_email_address.value = "";

$("#subscribe_form").hide();
document.getElementById("subscribe_success").style.display = "block";
document.getElementById("subscribe_success").innerHTML = "Thank You! We'll contact you shortly.";
}else{
document.getElementById("subscribe_error").style.display = "block";
document.getElementById("subscribe_error").innerHTML = "Oops! Something went wrong while prceeding.";
}		
}

});

}
}

function removeChecks(){
var footer_name = document.getElementById("subscribe_name"); 	
var footer_email_address = document.getElementById("subscribe_email");

if(footer_name.value != ""){
footer_name.className = "input";

}
if(footer_email_address.value != "" && checkcontact(footer_email_address.value) == true){
footer_email_address.className = "input";

}

}


function validateContact(){
//alert('hi');
var errors = "";

var contact_name = document.getElementById("contact_name"); 	
var contact_email_address = document.getElementById("contact_email");
var contact_subject = document.getElementById("contact_subject");

if(contact_name.value == ""){
errors+= 'Please provide your name.';
}
else if(contact_email_address.value == ""){
errors+= 'Please provide an email address.';
}
else if(checkcontact(contact_email_address.value) == false){
errors+= 'Please provide a valid email address.';
}		
else if(contact_subject.value == ""){
errors+= 'Please provide a subject.';
}


if(errors)
{
document.getElementById("error").style.display = "block";
document.getElementById("error").innerHTML = errors;
return false;				
}

else{

$.ajax({
type: "POST",
url: 'process.php',
data: $("#contact_form").serialize(),
success: function(msg)
{
if(msg == 'success') 
{	
document.getElementById("error").style.display = "none";
document.getElementById("contact_name").value = "";
document.getElementById("contact_email").value = "";
document.getElementById("contact_subject").value = "";
document.getElementById("message").value = "";
$("#contact_form").hide();
document.getElementById("success").style.display = "block";
document.getElementById("success").innerHTML = "Thank You! We'll contact you shortly.";
}else{
document.getElementById("error").style.display = "block";
document.getElementById("error").innerHTML = "Oops! Something went wrong while prceeding.";
}		
}

});

}
}










//Switcher
jQuery(document).ready(function($) {

jQuery("#default-color" ).click(function(){
jQuery("#color" ).attr("href", "css/default-color.css");
//jQuery(".link img" ).attr("src", "img/clinica/timetable-menu-brown.png");
return false;
});

jQuery("#brown" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/brown.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-brown.png");
return false;
});

jQuery("#pink" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/pink.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-pink.png");
return false;
});

jQuery("#dark-blue" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/dark-blue.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-dark-blue.png");
return false;
});


jQuery("#green" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/green.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-green.png");
return false;
});

jQuery("#light-green" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/light-green.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-light-green.png");
return false;
});


jQuery("#orange" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/orange.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-orange.png");
return false;
});

jQuery("#light-blue" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/light-blue.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-light-blue.png");
return false;
});

jQuery("#purple" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/purple.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-purple.png");
return false;
});

jQuery("#red" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/red.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-red.png");
return false;
});

jQuery("#yellow" ).click(function(){
jQuery("#color" ).attr("href", "css/theme-colors/yellow.css");
jQuery(".link img.time-tab" ).attr("src", "img/clinica/timetable-menu-yellow.png");
return false;
});



jQuery("#light").click(function(){
jQuery("#footer").addClass("footer-light");
jQuery("#footer").removeClass("footer");
//jQuery("#footer img" ).attr("src", "img/clinica/footer-logo.jpg");
});
jQuery("#dark").click(function(){
jQuery("#footer").addClass("footer");
jQuery("#footer").removeClass("footer-light");
//jQuery("#footer img" ).attr("src", "img/clinica/footer-logo-dark.jpg");
});

jQuery("#header-one").click(function(){
jQuery("#header-1").show();
jQuery("#header-2").hide();
});
jQuery("#header-two").click(function(){
jQuery("#header-2").show();
jQuery("#header-1").hide();
});



// picker buttton
jQuery(".picker_close").click(function(){

jQuery("#choose_color").toggleClass("position");

});



})(jQuery);