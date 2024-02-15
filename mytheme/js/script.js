function toggleMobileMenu() {
  const mobileMenu = document.querySelector('.mobile-menu');
  mobileMenu.classList.toggle('open');
  const burger = document.querySelector('.burger');
  burger.classList.toggle('open');
}
function toggleBurger() {
  const burger = document.querySelector('.burger');
  burger.classList.toggle('open');
}


// Находим все элементы с классом "showModalBtn"
const modalButtons = document.querySelectorAll('.showModalBtn');
const modal = document.querySelector('.modal');
const overlay = document.getElementById("overlaymodal");

const modalButtons1 = document.querySelectorAll('.modalBtn');
const modalHeading = document.getElementById('modalHeading');
const textInput = document.getElementById('textInput');
// Добавляем обработчик события клика на каждую кнопку
modalButtons.forEach(button => {
  button.addEventListener('click', function(event) {
      event.preventDefault(); 
      const newText = this.getAttribute('data-text');
      modal.style.display = 'block'; // Открываем модальное окно
      modalHeading.textContent = newText;
      textInput.value = newText;
      overlay.style.display = "block";
  });
});

function closeModal(){
  modal.style.display = 'none';
  overlay.style.display = "none";
}
closeModalBtn.addEventListener("click", () => {
  closeModal()
});
// Добавляем обработчик события клика за пределами модального окна для закрытия
window.addEventListener('click', (event) => {
    if (event.target === modal) {
      closeModal()
    }
});
// эффект печатной машинки
// Запуск анимации при загрузке страницы
document.addEventListener("DOMContentLoaded", function() {
  const listItems = document.querySelectorAll('.ul2 li');
  const listItems2 = document.querySelectorAll('.ul3 li');
  listItems.forEach((item, index) => {
    item.style.animationDelay = `${index * 1.5}s`; // Задержка для каждого элемента списка
    item.style.borderRight = ".15em solid orange"; 

    item.addEventListener('animationend', function(event) {
      
      if (event.animationName === 'typing') {
      
        item.style.borderRight = "none"; // Удаление правой границы
      }
    });
  });
  setTimeout(() => {
  
    listItems2.forEach((item, index) => {
      item.style.animationDelay = `${index * 1.5}s`;
      item.style.borderRight = ".15em solid orange"; 
      item.addEventListener('animationend', function(event) {
      
        if (event.animationName === 'typing1') {
        
          item.style.borderRight = "none"; // Удаление правой границы
        }
      });
    });

  }, 1000); // 2 секунды = 2000 миллисекунд

});


document.addEventListener("DOMContentLoaded", function() {
  var form = document.querySelector("form");

  form.addEventListener("submit", function(event) {
      event.preventDefault(); // Отменяем стандартное поведение формы

      var formData = new FormData(form); // Создаем объект FormData для передачи данных формы

      // Отправляем данные на сервер с помощью AJAX
      fetch("/wp-content/themes/send.php", {
          method: "POST",
          body: formData
      })
      .then(response => {
        if (!response.ok) {
            throw new Error("Ошибка при отправке данных формы");
        }
        return response.text();
    })
    .then(data => {
        console.log(data); // Выводим результат выполнения запроса в консоль
        // Закрываем модальное окно
        closeModal();
        // Выводим сообщение о успешной отправке письма
        alert("Письмо успешно отправлено");
    })
    .catch(error => {
        console.error("Ошибка:", error);
        closeModal();
        alert("Упс какая то ошибка, напишите на ватсап или телеграм ");
        // Добавьте здесь код для обработки ошибок при отправке данных, если это необходимо
    });
});
});

