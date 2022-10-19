$(document).ready(function () {
    const ingredientWrap = $('#ingredient-wrap');
    const addIngredient = $('#add-ingredient');
    let ingredientsCount = ingredientWrap[0].children.length;

    const steps = $('#steps');
    const stepsTab = $('#steps-tab');
    const stepsContent = $('#steps-content');
    const addStep = $('#add-step');
    const removeStep = $('#remove-step');
    let stepsTabCount = stepsTab[0].children.length;
    let stepsContentCount = stepsContent[0].children.length;

    $(addIngredient).click(function () {
        ingredientWrap.append(`<div class="rn-ingredient-item">
                                        <label for="ingredients[${ingredientsCount}]" class="me-2 ingredient-label">${ingredientsCount + 1}.</label>
                                        <input type="text" class="form-control" id="ingredients[${ingredientsCount}]" name="ingredients[${ingredientsCount}]" placeholder="Ingredient title">
                                        <span class="text-danger ms-2 ingredient-remove" title="Remove ingredient" id="remove-ingredient">
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </div>`)
        ingredientsCount++
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
        console.log(stepsTabCount)
        console.log(stepsContentCount)
        if (stepsTabCount && stepsContentCount) {
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

    ingredientWrap.on('click', '#remove-ingredient', function () {
        $(this).parent().remove();
        ingredientsCount--;
        ingredientWrap.find('.rn-ingredient-item').each(function (i, item) {
            const id = `ingredients[${i}]`;
            $('label', item).each(function () {
                $(this).attr('for', id)
                $(this).text(`${i + 1}.`)
            })
            $('input', item).each(function () {
                $(this).attr('id', id).attr('name', id)
            })
        })
    })
})
