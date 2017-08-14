$(".button-collapse").sideNav();
$(".drop1").dropdown();
$(".drop2").dropdown();
// $('#modal1').modal('open');
// Initialize collapse button
$(".button-collapses").sideNav();
// Initialize collapsible (uncomment the line below if you use the dropdown variation)
//$('.collapsible').collapsible();
$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('#modal3').modal();
    $('#modal2').modal();
    $('#modal1').modal();
});