document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form[data-ajax="true"]');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Vykdoma...';
            }
        });
    });
});
