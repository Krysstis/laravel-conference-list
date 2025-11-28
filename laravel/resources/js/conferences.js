document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-conference-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const form = this.closest('form');
            const conferenceName = this.dataset.conferenceName;

            if (confirm(`Ar tikrai norite ištrinti renginį "${conferenceName}"?`)) {
                const formData = new FormData(form);
                const url = form.action;

                window.axios.post(url, formData)
                    .then(response => {
                        window.location.reload();
                    })
                    .catch(error => {
                        if (error.response && error.response.status === 419) {
                            alert('Sesijos laikas baigėsi. Prašome perkrauti puslapį.');
                            window.location.reload();
                        } else {
                            alert('Įvyko klaida ištrinant renginį.');
                        }
                    });
            }
        });
    });

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
