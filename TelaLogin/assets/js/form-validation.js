'use strict';

(() => {
    const form = document.querySelector('[data-form]')
    const fields = {}

    const showMassageError = (field, message) => {
        const { element, errorElement } = field

        element.classList.add('error')
        errorElement.style.display = 'block'
        errorElement.textContent = message
    }

    const hideMessageError = (field) => {
        const  { element, errorElement } = field
        element.classList.remove('error')
        errorElement.style.display = 'none'
        errorElement.textContent = ''
    }

    const validateRequiredFields = () => {
        let isInValid = false
        for (const fieldkey in fields){
            const field = fields[fieldkey]
            const { element, errorElement, isRequired } = field
            if ((!element.value  || (fieldkey === 'terms' && !element.checked)) && isRequired) {
                isInValid = true
                showMassageError(field, 'Este campo é Obrigatório!')
            }
        }
        return isInValid
    }

    const onInputFocus = (event) => {
        const  { element, errorElement } = fields[event.target.name]
        hideMessageError(fields[event.target.name])

    }

    const onFormSubmit = (event) => {
        event.preventDefault()
        if(validateRequiredFields()) return
        alert('Dados prontos para serem enviados!')        
    }

    const setListeners = () => {
        form.addEventListener('submit', onFormSubmit) 
        for(const fieldkey in fields) {
            const { element } = fields[fieldkey]   
            element.addEventListener('focus', onInputFocus)         
        }
    }

    const setFieldElements = () => {
        const inputElements = document.querySelectorAll('[data-input]')
        for(const input of inputElements) {
            const inputName = input.getAttribute('name')
            fields[inputName] = {
                element: input,
                errorElement: input.parentElement.querySelector('[data-error-message]'),
                isRequired: input.hasAttribute('required') 
            }
            input.removeAttribute('required')
        }
    }
    
    const init = () => {
        setFieldElements()
        setListeners()
    }

    init()
})()