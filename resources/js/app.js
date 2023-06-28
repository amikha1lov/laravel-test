import './bootstrap';

document.addEventListener('DOMContentLoaded', (event) => {


    createComment();

    function createComment(){

        const commentsForm = document.querySelector('.ajax-form-comments');

        commentsForm?.addEventListener('submit', async (event) => {
            event.preventDefault();

            const data = new FormData(commentsForm);


            const response = await fetch('http://localhost:32862/api/v1/comments/create', {
                method: 'post',
                body:data
            })

            const result = await response.json();

            (result.status === 'success') ? alert('Комментарий успешно добавлен') : alert('Ошибка при добавлении комментария');


        });
    }

})
