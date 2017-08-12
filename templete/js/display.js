function changeStyleDiv() {
    document.getElementById('authorization').style.display = 'block';
    document.getElementById('bga').style.display = 'block';
}

function closemenu() {
    document.getElementById('authorization').style.display = 'none';
    document.getElementById('bga').style.display = 'none';
    document.getElementById('closeerror').style.display = 'none';
}

function openloginmenu() {
    document.getElementById('loginmenu').style.display = 'block';
    document.getElementById('formsearch').style.display = 'none';
}

function closeloginmenu() {
    document.getElementById('loginmenu').style.display = 'none';
}

function opensearch() {
    document.getElementById('formsearch').style.display = 'block';
}

function closesearch() {
    document.getElementById('formsearch').style.display = 'none';
}
function openCat() {
    document.getElementById('cats').removeAttribute('hidden', 0);
}
function closeCat() {
    document.getElementById('cats').setAttribute('hidden', 0);
}
$(".button-collapse").sideNav();
$(".drop1").dropdown();
$(".drop2").dropdown();
// Initialize collapse button
$(".button-collapses").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});