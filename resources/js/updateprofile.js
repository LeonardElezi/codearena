/**
 * Created by leonard on 9/16/15.
 */

$(function() {
    $('#ide').tokenfield({
        autocomplete: {
            source: codearena.allIdes,
            delay: 100
        },
        showAutocompleteOnFocus: true
    });

    $('#ide').tokenfield('setTokens', codearena.ides);

    $('#ide').on('tokenfield:createtoken', function (event) {
        var existingTokens = $(this).tokenfield('getTokens');
        var exists = false;
        $.each(existingTokens, function(index, token) {
            if (token.value === event.attrs.value){
                event.preventDefault();
                exists = true;
            }
        });

        if(!exists){
            // Insert it into the database
            $.ajax({
                url: '/profile/edituseride',
                dataType: 'json',
                data: {
                    'ide': event.attrs.value
                },
                async: false
            }).done(function(data) {
                if(data.created=='false')
                {
                    event.preventDefault();
                    alert("Only listed IDEs are accepted!");
                }
            })
                .fail(function() {
                    alert("Only listed IDEs are accepted!");
                    event.preventDefault();
                });
        }
    });

    $('#ide').on('tokenfield:removetoken', function (event) {
        // Delete it from the database
        $.ajax({
            url: '/profile/deleteuseride',
            dataType: 'json',
            data: {
                'ide': event.attrs.value
            },
            async: false
        }).done(function(data) {
            if(data.deleted=='false')
            {
                event.preventDefault();
                alert("Could not delete, please refresh or try again!");
            }
        })
            .fail(function() {
                alert("Could not delete, please refresh or try again!");
                event.preventDefault();
            });
    });

    $('#languages').tokenfield({
        autocomplete: {
            source: codearena.allLanguages,
            delay: 100
        },
        showAutocompleteOnFocus: true
    });

    $('#languages').tokenfield('setTokens', codearena.programminglanguages);

    $('#languages').on('tokenfield:createtoken', function (event) {
        var existingTokens = $(this).tokenfield('getTokens');
        var exists = false;
        $.each(existingTokens, function(index, token) {
            if (token.value === event.attrs.value){
                event.preventDefault();
                exists = true;
            }

        });

        if(!exists){
            // Insert it into the database
            $.ajax({
                url: '/profile/edituserpl',
                dataType: 'json',
                data: {
                    'programminglanguage': event.attrs.value
                },
                async: false
            }).done(function(data) {
                if(data.created=='false')
                {
                    event.preventDefault();
                    alert("Only listed Programming Languages are accepted!");
                }
            })
                .fail(function() {
                    alert("Only listed Programming Languages are accepted!");
                    event.preventDefault();
                });
        }
    });

    $('#languages').on('tokenfield:removetoken', function (event) {
        // Delete it from the database
        $.ajax({
            url: '/profile/deleteuserpl',
            dataType: 'json',
            data: {
                'programminglanguage': event.attrs.value
            },
            async: false
        }).done(function(data) {
            if(data.deleted=='false')
            {
                event.preventDefault();
                alert("Could not delete, please refresh or try again!");
            }
        })
            .fail(function() {
                alert("Could not delete, please refresh or try again!");
                event.preventDefault();
            });
    });

    $('#skills').tokenfield({
        autocomplete: {
            source: codearena.allSkills,
            delay: 100
        },
        showAutocompleteOnFocus: true
    });


    $('#skills').tokenfield('setTokens', codearena.skills);

    $('#skills').on('tokenfield:createtoken', function (event) {
        var existingTokens = $(this).tokenfield('getTokens');
        var skillExists = false;
        $.each(existingTokens, function(index, token) {
            if (token.value.toLowerCase() === event.attrs.value.toLowerCase()){
                event.preventDefault();
                skillExists = true;
            }
        });

        if(!skillExists){
            // Insert it into the database
            $.ajax({
                url: '/profile/edituserskill',
                dataType: 'json',
                data: {
                    'skill': event.attrs.value
                },
                async: false
            }).done(function(data) {
                if(data.created=='false')
                {
                    event.preventDefault();
                    alert("Error updating skills. Please refresh and try again!");
                }
            })
                .fail(function() {
                    event.preventDefault();
                    alert("Error updating skills. Please refresh and try again!");
                });
        }
    });

    $('#skills').on('tokenfield:removetoken', function (event) {
        // Delete it from the database
        $.ajax({
            url: '/profile/deleteuserskill',
            dataType: 'json',
            data: {
                'skill': event.attrs.value
            },
            async: false
        }).done(function(data) {
            if(data.deleted=='false')
            {
                event.preventDefault();
                alert("Could not delete, please refresh or try again!");
            }
        })
            .fail(function() {
                alert("Could not delete, please refresh or try again!");
                event.preventDefault();
            });
    });
});