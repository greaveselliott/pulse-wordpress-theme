
/*!
 * jQuery lightweight plugin boilerplate
 * Original author: @ajpiano
 * Further changes, comments: @addyosmani
 * Licensed under the MIT license
 */

// the semi-colon before the function invocation is a safety
// net against concatenated scripts and/or other plugins
// that are not closed properly.
;(function ( $, window, document, undefined ) {

    // undefined is used here as the undefined global
    // variable in ECMAScript 3 and is mutable (i.e. it can
    // be changed by someone else). undefined isn't really
    // being passed in so we can ensure that its value is
    // truly undefined. In ES5, undefined can no longer be
    // modified.

    // window and document are passed through as local
    // variables rather than as globals, because this (slightly)
    // quickens the resolution process and can be more
    // efficiently minified (especially when both are
    // regularly referenced in your plugin).

    // Create the defaults once
    var eemjiiWPQuery = "Eemjii_WP_QueryName",
        defaults = {
            propertyName: "value"
        };

    // The actual plugin constructor
    function Eemjii_WP_Query( element, options ) {
        this.element = element;

        // jQuery has an extend method that merges the
        // contents of two or more objects, storing the
        // result in the first object. The first object
        // is generally empty because we don't want to alter
        // the default options for future instances of the plugin
        this.options = $.extend( {}, defaults, options) ;

        this._defaults = defaults;
        this._name = eemjiiWPQuery;

        this.init();
    }

    Eemjii_WP_Query.prototype.init = function () {
        var self = this;

        self.queryEvents();
        self.load_posts();
    };

    // Events
    Eemjii_WP_Query.prototype.queryEvents = function () {
        var self = this;

        //If list item is clicked, trigger input change and add css class
        $('#genre-filter li').live('click', function(){
            var input = $(this).find('input');

            if ( $(this).attr('class') == 'clear-all' )
            {
                $('#genre-filter li').removeClass('selected').find('input').prop('checked',false);
                self.load_posts(); //Load Posts
            }
            else if (input.is(':checked'))
            {
                input.prop('checked', false);
                $(this).removeClass('selected');
            } else {
                input.prop('checked', true);
                $(this).addClass('selected');
            }

            input.trigger("change");
        });

        //If input is changed, load posts
        $('#genre-filter input').live('change', function(){
            self.load_posts(); //Load Posts
        });

        //Fire ajax request when typing in search
        $('#genre-search input.text-search').on('keyup', function(e){
            if( e.keyCode == 27 )
            {
                $(this).val('');
            }

            self.load_posts(); //Load Posts
        });

        $('#submit-search').on('click', function(e){
            e.preventDefault();
            self.load_posts(); //Load Posts
        });
    };

    //Find Selected Genres
    Eemjii_WP_Query.prototype.getSelectedGenres = function() {
        var genres = [];

        $("#genre-filter li input:checked").each(function() {
            var val = $(this).val();
            genres.push(val);
        });

        return genres;
    };

    //Get Search Form Values
    Eemjii_WP_Query.prototype.getSearchValue = function () {

        var searchValue = $('#genre-search input.text-search').val();
        return searchValue;

    };

    // Ajax Call
    Eemjii_WP_Query.prototype.load_posts = function (paged) {
        var self = this;
        var paged_value = paged;
        var ajax_url = ajax_genre_params.ajax_url;

        $.ajax({
            type: 'GET',
            url: ajax_url,
            data: {
                action: 'genre_filter',
                genres: self.getSelectedGenres,
                search: self.getSearchValue(),
                paged: paged_value
            },
            beforeSend: function ()
            {
                //Show loader here
            },
            success: function(data)
            {
                //Hide loader here
                $('#genre-results').html(data);
            },
            error: function()
            {
                $("#genre-results").html('<p>There has been an error</p>');
            }
        });

    };

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn.eemjiiWPQuery = function ( options ) {
        return this.each(function () {
            if (!$.data(this, eemjiiWPQuery)) {
                $.data(this, eemjiiWPQuery,
                    new Eemjii_WP_Query( this, options ));
            }
        });
    };

    $(document).eemjiiWPQuery();

})( jQuery, window, document );

