$(document).ready(function () {
    const stepsList = $('#steps');
    const _token = $('input[name="_token"]').attr('value');
    const url = window.location.origin + '/api/steps';

    stepsList.on('click', '#remove-step', function() {
        const removedItem = $(this);
        const id = removedItem.data('id');
        $.ajax({
            url: url + `/${id}`,
            type: 'DELETE',
            data: {
                _token,
                id,
            },
            success: function({ data }) {
                console.log(data);
                removedItem.parent().parent().parent().remove();
            }
        });
    });
})
