const obituaryForm = document.getElementById('obituaryForm');

obituaryForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevent default form submission

    const name = document.getElementById('name').value;
    const content = document.getElementById('content').value;

    if (name.trim() === '') {
        alert('Name is required');
        return;
    }

    if (content.trim() === '') {
        alert('Content is required');
        return;
    }

    obituaryForm.submit();
});
