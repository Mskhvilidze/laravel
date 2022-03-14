$('.popup1').on('mouseover', function(e){
    let $target = $(e.target);
    const body = $target.attr('data-id');

    var popup = document.getElementById("myPopup");
    popup.innerHTML = body;
    popup.classList.add("show");
});

$('.popup2').on('click', function(e){
    var popup = document.getElementById("myPopup")
    popup.classList.remove("show");
    console.log("AA");
});