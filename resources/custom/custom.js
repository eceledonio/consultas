/*
 * Place the CSRF token as a header on all pages for access in AJAX requests
 */
$.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        }
    }
});

/**
 * Place any jQuery/helper plugins in here.
 */
$(function () {
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

    /**
     * Disable submit inputs in the given form
     *
     * @param form
     */
    function disableSubmitButtons(form) {
        form.find('input[type="submit"]').attr('disabled', true);
        form.find('button[type="submit"]').attr('disabled', true);
    }

    /**
     * Enable the submit inputs in a given form
     *
     * @param form
     */
    function enableSubmitButtons(form) {
        form.find('input[type="submit"]').removeAttr('disabled');
        form.find('button[type="submit"]').removeAttr('disabled');
    }

    /**
     * Disable all submit buttons once clicked
     */
    $('form').submit(function () {
        disableSubmitButtons($(this));
        return true;
    });

    /**
     * Add a confirmation to a delete button/form
     */
    $('body').on('submit', 'form[name=delete-item]', function(e) {
        e.preventDefault();

        Swal.fire({
            title: '¿Estás seguro de que quieres eliminar este registro?',
            showCancelButton: true,
            confirmButtonText: 'Confirmar Eliminación',
            cancelButtonText: 'Cancelar',
            allowOutsideClick: false,
            allowEscapeKey: false,
            icon: 'warning'
        }).then((result) => {
            if (result.value) {
                this.submit()
            } else {
                enableSubmitButtons($(this));
            }
        });
    })
        .on('submit', 'form[name=confirm-item]', function (e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Estás seguro de que quieres hacer esto?',
                showCancelButton: true,
                confirmButtonText: 'Continuar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                icon: 'warning'
            }).then((result) => {
                if (result.value) {
                    this.submit()
                } else {
                    enableSubmitButtons($(this));
                }
            });
        })
        .on('click', 'a[name=confirm-item]', function (e) {
            /**
             * Add an 'are you sure' pop-up to any button/link
             */
            e.preventDefault();

            Swal.fire({
                title: '¿Estás seguro de que quieres hacer esto?',
                showCancelButton: true,
                confirmButtonText: 'Continuar',
                cancelButtonText: 'Cancelar',
                allowOutsideClick: false,
                allowEscapeKey: false,
                icon: 'info'
            }).then((result) => {
                result.value && window.location.assign($(this).attr('href'));
            })
        });

    $('table').on('draw.dt', function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover({
            trigger: "hover"
        });
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

});

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
