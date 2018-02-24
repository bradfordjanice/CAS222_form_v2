/*
File Name: hamburgerMenu.js
Date: 01/28/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events template
*/

/* HAMBURGER MENU */

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}