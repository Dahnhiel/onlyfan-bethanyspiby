// let cardNumber = document.getElementById("cardNumber");

function removeNonNumeric(input){
    input.value = input.value.replace(/\D/g, '');
    input.value = input.value.replace(/(\d{4})/g, '$1-');
    input.value = input.value.replace(/-$/, '');
}

function addslash(input){
    input.value = input.value.replace(/\D/g, '');
    input.value = input.value.replace(/(\d{2})/g, '$1-');
    input.value = input.value.replace(/-$/, '');
}

function toggleReadMore(){
    const content = document.querySelector('.content');
    const more = document.querySelector('.read-more');
    const readMore = document.querySelector('.read-more')

    if(content.classList.contains('expanded')){
        content.style.maxHeight= '100px';
        more.style.display= 'inline';
        readMore.innerText = 'Collapse';
        content.classList.add('expanded')
    }
}