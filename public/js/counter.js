$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

// jquerynya
        $('.create-comment').on('click', function (event) {
            event.preventDefault();
            // tangkap data2 yang dibutuhkan untuk dimunculkan di modal
            // berdasarkan kode agan, yang agan butuhkan di modal hanya $post->body jadi tangkap value ini
            var title = $(this).parents('.post').find('.article>a').text();
            var detail = $(this).parents('.post').find('.detail>a').text();

            // isi data2 modal yang dibutuhkan
            $('#comment-modal .modal-title>text').text(title);
            $('#comment-modal .modal-body>text').text(detail);
            // munculkan modal
            $('#comment-modal').modal();
        });