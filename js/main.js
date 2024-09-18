const contentPages = document.querySelectorAll('.content')
const accountWindow = document.querySelector('.header__account-window')
const profile = document.querySelector('.header__account-profile')

const input = document.getElementById('search');

input.addEventListener('blur', () => {
    if (input.value !== '') {
        input.value = ''
    }
})

const iconSearch = document.getElementById('search-icon_header')
const headerLiElements = document.querySelectorAll('.header__list-item')
const closeIcon = document.querySelector('.close-icon_header')
const searchWindow = document.querySelector('.header__list-search-field')
iconSearch.addEventListener('click', () => {
    headerLiElements.forEach(liElement => liElement.classList.toggle('none'))
})

input.addEventListener('input', () => {
    if (input.value.length > 0) {
        closeIcon.classList.remove('none')
    } else {
        closeIcon.classList.add('none')
    }
})

closeIcon.addEventListener('click', () => {
    input.focus()
    input.value = ''
    closeIcon.classList.add('none');
})

const stateAddProfileDisabled = () => {
    return profile.classList.add('profile-disabled')
}
const stateRemoveProfileDisabled = () => {
    return profile.classList.remove('profile-disabled')
}

const stateAddProfileActive = () => {
    return profile.classList.add('profile-active')
}
const stateRemoveProfileActive = () => {
    return profile.classList.remove('profile-active')
}

profile.addEventListener('click', (e) => {
    e.stopPropagation();
    accountWindow.classList.toggle('none')

    if (!accountWindow.classList.contains('none')) {
        stateRemoveProfileDisabled()
        stateAddProfileActive()
    } else {
        stateAddProfileDisabled()
        stateRemoveProfileActive()
    }
})

function checkProfileActive (e) {
    if (accountWindow.classList.contains('none')) {
        stateAddProfileDisabled()
        stateRemoveProfileActive()
    }
}

const btnRegister = document.querySelector('.button-register')
const btnAuth = document.querySelector('.button-auth')
const contentWindow = document.querySelector('.header__account-window-content')

document.onclick = (e) => {
    const target = e.target;
    
    if (target !== accountWindow 
        && target !== contentWindow 
        && target !== btnRegister 
        && target !== btnAuth)  
    {
        accountWindow.classList.add('none');
    }
    checkProfileActive ()
}

const listHeaderCategories = document.querySelectorAll('.header__list-categories')

let isInsideSearchWindow = false;
document.addEventListener('mousedown', (e) => {
    isInsideSearchWindow = searchWindow.contains(e.target);
});
document.addEventListener('click', (e) => {
    const target = e.target;
    
    if (!searchWindow.contains(target) && target !== iconSearch) {
        if (isInsideSearchWindow === false) {
            searchWindow.classList.add('none')
            listHeaderCategories.forEach(category => {
                category.classList.remove('none')
            })
        }
    }
});