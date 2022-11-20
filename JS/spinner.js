document.querySelector('body ').style.display='none';
document.querySelector('*').classList.add('spinner');



setTimeout(() => {
    document.querySelector('* ').classList.remove('spinner');
    document.querySelector('body ').style.display='block';
}, 3000);