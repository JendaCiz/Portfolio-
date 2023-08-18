document.getElementById('showContentBtn').addEventListener('click', function() {
    let content = document.querySelector('.hidden-content');
    content.style.display = 'block';
    content.classList.add('fade-in');
    document.querySelector('.center-button').style.display = 'none';
});
