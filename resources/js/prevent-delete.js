// Ask confirm with alert
const deleteForms = document.querySelectorAll('.form-delete');

deleteForms.forEach(form => {
    form.addEventListener('submit', e => {
        e.preventDefault();
        const confirmation = confirm('Sei sicuro di voler eliminare il progetto?');
        if (confirmation) form.submit();
    });
});