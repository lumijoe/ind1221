document.addEventListener('DOMContentLoaded', function() {
    fetch('/assets/includes/header.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('commonHeader').innerHTML = data;
        });
});