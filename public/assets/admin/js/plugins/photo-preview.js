$("#photo").change(function() {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            console.log(e.target)
            const photoPreview = $('#photo-preview');
            photoPreview.removeClass('w-sm-50 w-md-25').addClass('w-100')
            photoPreview[0].src = e.target.result;
            photoPreview.hide();
            photoPreview.fadeIn(650);
        }
        reader.readAsDataURL(this.files[0]);
    }
});
