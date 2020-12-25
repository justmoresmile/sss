"use strick"
document.addEventListener('DOMContentLoaded', function() {
    const buttonClick = document.querySelectorAll('[data-button]');
    let overlay = document.querySelector('.overlay');
    const body = document.body;
    let close = document.querySelector('.form__close');
    let miniClose = document.querySelector('.form__close-mini');

    miniClose.addEventListener('click', function() {
        let closeFormMini = document.querySelector('#thanks');
        closeFormMini.style.display = 'none';
    });


    buttonClick.forEach(function(item) {
        item.addEventListener('click', function() {
            body.style.overflow = 'hidden';
            overlay.classList.add('active');





            // let close = document.querySelector('.form__close');
            // close.addEventListener('click', function() {
            //     overlay.classList.remove('active');
            // });
        });
        const inputsTel = document.querySelector('input[type="tel"]');
        Inputmask({
            "mask": "+7(999) 999-99-99",
            showMaskOnHover: false
        }).mask(inputsTel);

    });




    const form = document.querySelectorAll('[data-action]');
    form.forEach(function(item) {

        close.addEventListener('click', function() {
            let formReq = document.querySelectorAll('._req');
            for (let index = 0; index < formReq.length; index++) {
                const input = formReq[index];
                formRemoveError(input);
            }
            body.style.overflow = 'visible';
            overlay.classList.remove('active');
            item.reset();

        });
        item.addEventListener('submit', formSend);


        async function formSend(e) {
            e.preventDefault();

            let error = formValidate(form);

            let formData = new FormData(item);
            let showMiniForm = document.querySelector('#thanks');

            if (error === 0) {
                item.classList.add('_sending');
                let response = await fetch('mail.php', {
                    method: 'POST',
                    body: formData
                });
                if (response.ok) {
                    // alert('Все ок бро');
                    // let result = await response.json();
                    // alert(result.message);
                    // // formPreview.innerHTML = '';
                    body.style.overflow = 'visible';
                    showMiniForm.style.display = 'block';
                    item.reset();
                    item.classList.remove('_sending');
                    overlay.classList.remove('active');
                } else {
                    alert('Ошибка');
                    item.classList.remove('_sending');
                }

            } else {


            }
        }

    });

    // form.addEventListener('submit', formSend);

    function formValidate(form) {


        let error = 0;
        let formReq = document.querySelectorAll('._req');
        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];


            formRemoveError(input);

            // if (input.classList.contains('_email')) {  //проверка email
            //     if (emailTest(input)) {
            //         formAddError(input);
            //         error++;
            //     } else {

            //     }
            // } 

            if (input.getAttribute('type') === 'checkbox' && input.checked === false) { //проверяем на тип(что это чекбокс ) а также если этот чекбокс не включет
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;

                }

            }


        }

        return error;

    }

    function formAddError(input) { //добавляем родителю класс еррор
        input.parentElement.classList.add('_error');
        input.classList.add('_error');


    }

    function formRemoveError(input) { //удаляем у  родителя класс еррор

        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');

    }




    //Проверка емаил
    // function emailTest(input) {

    //     return !/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/.test(input.value); //проверка заполнения правильности поля email
    //     // return /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(input.value);
    // }

    function teltest(input) {

        return /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/.test(input.value); //проверка заполнения правильности поля email

    }

});