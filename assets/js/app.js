/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.scss in this case)
import '../scss/app.scss';

// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.
const $ = require('jquery');
// import $ from 'jquery';
require('bootstrap');

console.log('Hello Webpack Encore! Edit me in assets/app.js');

// fonction pour afficher mon nom
var i=0;
var mytext="Developpeur Web & Mobile";
var mytextelem=document.getElementById("subtitle");
var mycurrenttext="";
function myFunction () {
    if (i<mytext.length) {
        setTimeout(function(){
            mycurrenttext=mycurrenttext+mytext[i];
            mytextelem.textContent=mycurrenttext;
            i++;
            myFunction();
        },200);
    }
}
myFunction ();

$(document).ready(function(){
    $('#interests .thumbnail').hover(function(){
            $(this).children(".cust-caption").slideDown();
        },
        function(){
            $(this).children(".cust-caption").fadeOut();
        });


    // spy and scroll menu boogey
    $("#navbar a.hash").click( function(e) {

        // prevent default anchor click behavior
        e.preventDefault();

        // store hash
        var hash = this.hash;

        // Destination
        var scrollOffset = $(this.hash).offset().top;

        // animate
        $('html, body').animate({
            scrollTop: scrollOffset
        }, 500, function(){
            window.location.hash = hash;
        })
    })
});

// PORTFOLIO //

$('.nav__trigger').on('click', function(e){
    e.preventDefault();
    $(this).parent().toggleClass('nav--active');
});


