/*
 * Place the CSRF token as a header on all pages for access in AJAX requests
 */
$.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        }
    },
    complete: function(response, status, xhr){
        addDeleteForms();
    }
});

/**
 * Allows you to add data-method="METHOD to links to automatically inject a form
 * with the method on click
 *
 * Example: <a href="{{route('customers.destroy', $customer->id)}}"
 * data-method="delete" name="delete_item">Delete</a>
 *
 * Injects a form with that's fired on click of the link with a DELETE request.
 * Good because you don't have to dirty your HTML with delete forms everywhere.
 */
function addDeleteForms() {
    $('[data-method]').append(function () {
        if (!$(this).find('form').length > 0) {
            return "\n<form action='" + $(this).attr('href') + "' method='POST' name='delete_item' style='display:none'>\n" +
                "<input type='hidden' name='_method' value='" + $(this).attr('data-method') + "'>\n" +
                "<input type='hidden' name='_token' value='" + $('meta[name="csrf-token"]').attr('content') + "'>\n" +
                '</form>\n';
        } else { return ''; }
    })
        .attr('href', '#')
        .attr('style', 'cursor:pointer;')
        .attr('onclick', '$(this).find("form").submit();');
}

/**
 * Place any jQuery/helper plugins in here.
 */
$(function () {
    /**
     * Add the data-method="delete" forms to all delete links
     */
    addDeleteForms();

    /**
     * Disable all submit buttons once clicked
     */
    $('form').submit(function () {
        $(this).find('input[type="submit"]').attr('disabled', true);
        $(this).find('button[type="submit"]').attr('disabled', true);
        return true;
    });

    /**
     * Generic confirm form delete using Sweet Alert
     */
    $('body').on('submit', 'form[name=delete_item]', function (e) {
        e.preventDefault();

        const form = this;
        const link = $('a[data-method="delete"]');
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancelar';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Eliminar';
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Está seguro que desea eliminarlo?';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            icon: 'warning'
        }).then((result) => {
            result.value && form.submit();
        });
    }).on('click', 'a[name=confirm_item]', function (e) {
        /**
         * Generic 'are you sure' confirm box
         */
        e.preventDefault();

        const link = $(this);
        const title = (link.attr('data-trans-title')) ? link.attr('data-trans-title') : 'Está seguro que desea hacer esto?';
        const cancel = (link.attr('data-trans-button-cancel')) ? link.attr('data-trans-button-cancel') : 'Cancelar';
        const confirm = (link.attr('data-trans-button-confirm')) ? link.attr('data-trans-button-confirm') : 'Continuar';

        Swal.fire({
            title: title,
            showCancelButton: true,
            confirmButtonText: confirm,
            cancelButtonText: cancel,
            icon: 'info'
        }).then((result) => {
            result.value && window.location.assign(link.attr('href'));
        });
    });

    // Change Tab on load
    var hash = window.location.hash;
    hash && $('ul.nav a[href="' + hash + '"]').tab('show');

    $('.nav-tabs li > a').on('click', function (e) {
        $(this).tab('show');
        history.pushState(null,null, this.hash);
    });

    $(window).bind('hashchange', function(){
        $('ul.nav a[href^="' + document.location.hash + '"]').click();
    });

    if (document.location.hash.length) {
        $(window).trigger('hashchange');
    }

    $('table').on('draw.dt', function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover({
            trigger: "hover"
        });

        $('.kt-selectpicker').selectpicker();

        initDesktopTooltips();
    });

    $('.select2').select2({
        language: {
            noResults: function() {
                return 'Lo sentimos, no hay resultados!';
            }
        },

        placeholder: function(){
            $(this).data('placeholder');
        }
    });

    $.fn.selectpicker.Constructor.BootstrapVersion = '4';

    $('.kt-selectpicker').selectpicker({
        noneResultsText: 'No se encontraron resultados para: {0}'
    });
});

let initDesktopTooltips = function() {
    if (KTUtil.isInResponsiveRange('desktop')) {
        $('[data-toggle="kt-tooltip-desktop"]').each(function() {
            KTApp.initTooltip($(this));
        });
    } else {
        $('[data-toggle="kt-tooltip-desktop"]').each(function() {
            $(this).tooltip('dispose');
        });
    }
};

initDesktopTooltips();
KTUtil.addResizeHandler(initDesktopTooltips);

let languages = {
    en: {
        path: '/custom/datatables/en'
    },
    es: {
        path: '/custom/datatables/es'
    }
};

function getLanguage() {
    let lang = $('html').attr('lang');
    let url = languages[lang].path + '.json';

    $.ajax({
        url: url,
    }).done(function (obj) {
        let result = $.extend({}, obj, languages[lang]);
        (function ($, DataTable) {
            // Datatable global configuration
            $.extend(true, DataTable.defaults, {
                language: result
            });
        })(jQuery, jQuery.fn.dataTable);
    });
}

getLanguage();
