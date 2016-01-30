if ($('#disqus_thread').length) {
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
     var disqus_config = function () {
     this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };
     */
    (function () {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');

        s.src = '//allianceducation.disqus.com/embed.js';

        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
}
$('#incriptions').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var id = button.data('id');
    var name = button.data('name');
    var modal = $(this);
    console.log(button);
    modal.find('.modal-body input#event-id').val(id);
    modal.find('.modal-body input#event-name').val(name);
    modal.find('.modal-body #title-event').html(name);
});


$(document).ready(function () {
    $(".newsletter").delay(2000).animate({
        bottom: '0'
    }, 'slow');

    $(".mobile-newsletter").delay(2000).animate({
        bottom: '0'
    }, 'slow');

    $('.card-close').on('click', function () {
        $(".newsletter, .mobile-newsletter").animate({
            bottom: '-250px'
        }, 'slow');
    });


    $('#form-subscribe-newsletter').on('submit', function () {
        $('#confirmation').empty();
        $(".newsletter, .mobile-newsletter").animate({
            bottom: '-180px'
        }, '1500');
    });
    $('#form-subscribe-mobile').on('submit', function () {
        $('.modal-footer').empty();
    });
});


