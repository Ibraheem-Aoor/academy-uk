            data: 'actions',
            name: 'actions',
            searchable: false,
            orderable: false,
        },
    ];
}

/**
 * Project Info modal
 */

$('#team-modal').on('show.bs.modal', function (e) {
    var btn = e.relatedTarget;
    $(this).find('textarea').text(btn.getAttribute('data-message'));
});

// Quick Toggle is Active status from the table row
function toggleStatus(input) {
    var id = input.data('id');
    var route = input.data('route');
    var status = input.prop('checked') == true ? 1 : 0;
    $.get(route, {