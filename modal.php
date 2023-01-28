<!-- Кнопка-триггер модального окна -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
  Запустить модальное окно со статическим фоном
</button>

<!-- Модальное окно -->
<div class="modal fade" id="Modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Заголовок модального окна</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Понял</button>
      </div>
    </div>
  </div>
</div>
