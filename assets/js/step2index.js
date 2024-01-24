document.getElementById('add-user').addEventListener('click', function(event) {
    event.preventDefault();
    addUser();
    attachDeleteButtonListeners();
});

function attachDeleteButtonListeners() {
    document.querySelectorAll('.delete-user-btn').forEach(button => {
        button.removeEventListener('click', deleteButtonClickHandler);
        button.addEventListener('click', deleteButtonClickHandler);
    });
}

function deleteButtonClickHandler(event) {
    event.preventDefault();
    let $id = event.target.id.match(/\d+/)[0];;
    deleteUser($id);
    attachDeleteButtonListeners();
}

userId = 1;
function addUser(){

    const userCard = document.createElement('div');
    userCard.classList.add(`user-card`);
    userCard.classList.add(`user-card-${userId}`);
    userCard.classList.add('card');
    userCard.classList.add('mb-3');

    userCard.innerHTML = `
        <div class="input-group">
            <span class="input-group-text">Login (Электронная почта)</span>
            <input name="users[${userId}][email]" type="text" class="form-control">
        </div>
        <div class="input-group">
            <span class="input-group-text">Фамилия, имя</span>
            <input name="users[${userId}][name]" type="text" class="form-control">
            <button id="delete-user-${userId}" class="btn btn-danger delete-user-btn" type="button">-</button>
        </div>
      `;
    document.getElementById('user-cards').appendChild(userCard);
    userId++
}

function deleteUser(id) {
    let userCard = document.querySelector(`#user-cards .user-card-${id}`);
    userCard.remove();
    attachDeleteButtonListeners();
}