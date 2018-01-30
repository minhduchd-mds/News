$(document).ready(function () {
//    Hiển thị mobile
    $(".button-collapse").sideNav();
    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
        }
    );
//    ScrollFire
    var options = [
        {selector: '#nav', offset: 0, callback: function(el) {

        } },
        {selector: '#advertisement', offset: 205, callback: function(el) {
                Materialize.fadeInImage($(el));
            } },
        {selector: '#staggered-test', offset: 400, callback: function(el) {
                Materialize.showStaggeredList($(el));
            } },
        {selector: '#image-test', offset: 500, callback: function(el) {
                Materialize.fadeInImage($(el));
            } }
    ];
    Materialize.scrollFire(options);
//
    $('.tap-target').tapTarget('open');
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#modal1').modal('open');
    $('#modal1').modal('close');
});