$(function() {

    $('#side-menu').metisMenu();

});

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    //// where to find flash SWFs, if needed...
    //soundManager.url = '/assets/sounds//';
    //
    //soundManager.onready(function() {
    //    soundManager.createSound({
    //        id: 'mySound',
    //        url: 'http://codearena.dev/assets/sounds/level_up.mp3'
    //    });
    //
    //    var leveledUp = "NO";
    //    $( "#myModal" ).attr( "leveledUp", function( i, val ) {
    //        leveledUp = val.trim();
    //    });
    //
    //    if(leveledUp === "YES"){
    //        soundManager.play('mySound');
    //        $('#myModal').modal('show');
    //
    //        $.ajaxSetup({
    //            headers: {
    //                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //            }
    //        });
    //
    //        $.ajax({
    //            url: "/users/levelupdate",
    //            method: 'POST',
    //            processData: false,
    //            contentType: false,
    //            cache: false,
    //            success: function(data) {
    //                console.log("success");
    //            },
    //            error: function(data) {
    //                console.log(data);
    //                console.log("error");
    //            }
    //        });
    //    }
    //
    //});

    var url = window.location;
    setTimeout(function () {
        if(url.href === "http://codearena.co/" || url.href === "http://codearena.co"
            || url.href === "http://codearena.co/profile/" || url.href === "http://codearena.co/profile"
            || url.href === "http://codearena.co/leaderboard/" || url.href === "http://codearena.co/leaderboard")
        {
            url.reload();
        }
    }, 150 * 1000);

    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }

    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});
