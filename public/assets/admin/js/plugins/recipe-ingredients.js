$(document).ready(function () {
    const ingredientsList = $('#ingredients');
    const ingredientsTitle = $('#ingredients-title');
    const ingredientInput = $('#ingredient-input');
    const _token = $('input[name="_token"]').attr('value');
    const submitButton = $('#ingredient-submit');
    const url = submitButton.data('url');

    ingredientsList.on('click', '#remove-icon', function() {
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
                removedItem.parent().remove();
                ingredientsList[0].children.length ? ingredientsTitle.removeClass('d-none') : ingredientsTitle.addClass('d-none');
            }
        });
    });



    $(submitButton).click(function(e) {
        e.preventDefault();
        const recipeId = ingredientInput.data('recipe-id');
        const title = $(this).prevAll(ingredientInput).val();

        $.ajax({
            url,
            method: 'post',
            data: {
                _token,
                recipe_id: recipeId,
                title,
            },
            success: function({ data }) {
                console.log(data);
                ingredientsList.append(`<li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="ms-2 me-auto">
                                                <div>${data.title}</div>
                                            </div>
                                            <span class="badge bg-danger rounded-pill cursor-pointer" data-id="${data.id}" id="remove-icon">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </span>
                                        </li>`);
                ingredientsList[0].children.length ? ingredientsTitle.removeClass('d-none') : ingredientsTitle.addClass('d-none');
                ingredientInput.val("");
            }
        });
    });
})
