<script>
    const subjectSelect = document.getElementById('subject');
    const nameInput = document.getElementById('name');
    const phoneInput = document.getElementById('phone');
    const emailInput = document.getElementById('email');
    const websiteInput = document.getElementById('website');
    const detailsInput = document.getElementById('details');

    function submit() {
        const formData = new FormData();
        formData.append('touch_subject_id', subjectSelect.value);
        formData.append('name', nameInput.value);
        formData.append('email', emailInput.value);
        formData.append('website', websiteInput.value);
        formData.append('details', detailsInput.value);
        fetch('{{route('touch.store')}}',
            {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '@csrf'
                }
            })
            .then(response => response.json())
            .then(response => {
                console.log(response);
                alert('The form has been successfully submitted!');
            })
            .catch(error => {
                alert('The form submit was not successful!');
                console.log(error);
            });
    }
</script>
