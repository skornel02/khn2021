/* Include JQuery */
define(['jquery', 'core/ajax', 'core/notification'], function($, ajax, notification) {
    return {
        init: function(envconf) {

            var userId = parseInt(envconf.userid);

            var courseId = envconf.courseid;

            var ajaxPromises = ajax.call([
                {
                    methodname: 'block_point_view_get_database',
                    args: {
                        userid: userId,
                        courseid: courseId
                    },
                    fail: notification.exception
                }
            ]);

            $.when(ajaxPromises[0])
                .done(function(ajaxResult0) {

                    var moduleIds = [];
                    ajaxResult0.forEach(function(element) {
                        moduleIds.push(parseInt(element.cmid));
                    });

                    var openRow = [];

                    /**
                     * Hide/Show row details of the table.
                     *
                     * @param {array} event
                     */
                    function rowDetails(event) {
                        if (openRow[event.data.id]) {
                            $('.row_module' + event.data.id + '_details').css({'display': 'none'});
                            $('.row_module' + event.data.id + ' .c6').html('+');
                            openRow[event.data.id] = false;
                        } else {
                            $('.row_module' + event.data.id + '_details').css({'display': ''});
                            $('.row_module' + event.data.id + ' .c6').html('-');
                            openRow[event.data.id] = true;
                        }
                    }

                    $(function() {
                        /* Create an accordeon home made table */
                        moduleIds.forEach(function(id) {
                            openRow[id] = false;
                            $('.row_module' + id + '_details').css({'display': 'none'});
                            $('.row_module' + id + ' .c6').click({id: id}, rowDetails);

                            [2, 3, 4].forEach(function(index) {
                                if ($('.row_module' + id + ' .c' + index + ' .voteInt').text() === '0') {
                                    $('.row_module' + id + ' .c' + index + ' .overview_img')
                                        .css({'-webkit-filter': 'grayscale(100%)', 'filter': 'grayscale(100%)'});
                                }
                            });
                        });

                        /* Create two views : Integer and Pourcentage, both visible on click */
                        var intDisplay = false;
                        $('.voteInt').css({'display': 'none'});

                        $('.c2, .c3, .c4').click(function() {
                            if (!intDisplay) {
                                $('.voteInt').css({'display': ''});
                                $('.votePercent').css({'display': 'none'});
                                intDisplay = true;
                            } else {
                                $('.votePercent').css({'display': ''});
                                $('.voteInt').css({'display': 'none'});
                                intDisplay = false;
                            }
                        }).mouseout(function() {
                            $(this).css({'cursor': 'pointer'});
                        });
                    });
                });
        }
    };
});