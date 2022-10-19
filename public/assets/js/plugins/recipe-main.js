$(document).ready(function () {
    const ingredients = $('#ingredients');
    const addIngredient = $('#add-ingredient');
    let ingredientsCount = ingredients[0].children.length;

    const stepsTab = $('#steps-tab');
    const stepsContent = $('#steps-content');
    const addStep = $('#add-step');
    const removeStep = $('#remove-step');
    let stepsTabCount = stepsTab[0].children.length;
    let stepsContentCount = stepsContent[0].children.length;

    $(addIngredient).click(function () {
        ingredients.append(`<div class="rn-ingredient-item">
                                        <label for="ingredients[${ingredientsCount}]" class="me-2 ingredient-label">${ingredientsCount + 1}.</label>
                                        <input type="hidden" id="ingredient-recipe_id" name="ingredients[${ingredientsCount}][recipe_id]" value="">
                                        <input type="text" class="form-control ingredient-title" id="ingredients[${ingredientsCount}]" name="ingredients[${ingredientsCount}][title]" placeholder="Ingredient title">
                                        <span class="text-danger ms-2 ingredient-remove" title="Remove ingredient" id="remove-ingredient">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </div>`)
        ingredientsCount++
    })

    ingredients.on('click', '#remove-ingredient', function () {
        if (ingredientsCount > 1) {
            $(this).parent().remove();
            ingredientsCount--;
            ingredients.find('.rn-ingredient-item').each(function (i, item) {
                const id = `ingredients[${i}]`;
                $('label', item).each(function () {
                    $(this).attr('for', id)
                    $(this).text(`${i + 1}.`)
                })
                $('#ingredient-recipe_id', item).each(function () {
                    $(this).attr('name', `${id}[recipe_id]`)
                })
                $('.ingredient-title', item).each(function () {
                    $(this).attr('id', id).attr('name', `${id}[title]`)
                })
            })
        }
    })

    $(addStep).click(function () {
        const activeTab = stepsTab.find('.active');
        const activeContent = stepsContent.find('.active');
        activeTab.removeClass('active').attr('aria-selected', false)
        activeContent.removeClass('show active')
        stepsTabCount++;
        stepsTab.append(`<button class="nav-link active" id="step-${stepsTabCount}-tab" data-bs-toggle="pill" data-bs-target="#step-${stepsTabCount}" type="button" role="tab" aria-controls="step-${stepsTabCount}" aria-selected="true">
                            Step ${stepsTabCount}
                        </button>`)
        stepsContent.append(`<div class="tab-pane fade show active" id="step-${stepsContentCount + 1}" role="tabpanel" aria-labelledby="step-${stepsContentCount + 1}-tab" tabindex="0">
                            <input type="hidden" id="step-recipe_id" name="steps[${stepsContentCount}][recipe_id]" value="">
                                <input type="hidden" id="step-step" name="steps[${stepsContentCount}][step]" value="${stepsContentCount + 1}">
                            <div class="step-description">
                                <label for="steps[${stepsContentCount}][description]">Description</label>
                                <textarea class="form-control" id="steps[${stepsContentCount}][description]" name="steps[${stepsContentCount}][description]" rows="5"></textarea>
                            </div>
                            <div class="step-photo">
                                <label class="form-label" for="steps[${stepsContentCount}][photo]">Photo</label>
                                <input class="form-control" type="file" id="steps[${stepsContentCount}][photo]" name="steps[${stepsContentCount}][photo]" accept="image/*">
                            </div>
                        </div>`);
        stepsContentCount++;
    })

    $(removeStep).click(function () {
        if (stepsTabCount > 1 && stepsContentCount > 1) {
            const activeTab = stepsTab.find('.active');
            const activeContent = stepsContent.find('.active');
            activeTab.remove();
            activeContent.remove();
            stepsTabCount--;
            stepsContentCount--;
            stepsTab.find('button').each(function (i) {
                const tabId = `step-${i + 1}`
                $(this).attr('id', `${tabId}-tab`).attr('data-bs-target', `#${tabId}`).attr('aria-controls', tabId)
                $(this).text(`Step ${i + 1}`)
            })
            stepsContent.find('.tab-pane').each(function (i, item) {
                const contentId = `step-${i + 1}`
                const id = `steps[${i}]`
                $(this).attr('id', contentId).attr('aria-labelledby', `${contentId}-tab`)
                $('#step-recipe_id', item).each(function () {
                    $(this).attr('name', `${id}[recipe_id]`)
                })
                $('#step-step', item).each(function () {
                    $(this).attr('name', `${id}[step]`).val(i + 1)
                })
                $('.step-description', item).each(function () {
                    const descriptionLabel = $(this).find('label')
                    const descriptionTextArea = $(this).find('textarea')
                    descriptionLabel.attr('for', `${id}[description]`)
                    descriptionTextArea.attr('id', `${id}[description]`).attr('name', `${id}[description]`)
                })
                $('.step-photo', item).each(function () {
                    const photoLabel = $(this).find('label')
                    const photoInput = $(this).find('input')
                    photoLabel.attr('for', `${id}[photo]`)
                    photoInput.attr('id', `${id}[photo]`).attr('name', `${id}[photo]`)
                })
            })
            const lastTab = stepsTab.find(`#step-${stepsTabCount}-tab`);
            const lastContent = stepsContent.find(`#step-${stepsContentCount}`)
            lastTab.addClass('active').attr('aria-selected', true)
            lastContent.addClass('show active')
        }
    })
})
