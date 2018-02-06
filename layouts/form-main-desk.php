<form action="thank-you-desk.php" method="post">
  <div class="form-group">
    <label>Имя<span class="red">*</span></label>
    <input type="text" class="form-control" placeholder="Введите имя" name="name" required> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input type="text" class="phone-field form-control" placeholder="Введите номер телефона" name="phone" required>
  </div>
  <div class="form-group">
    <label>Email (электронная почта)</label>
    <input type="email" class="form-control" placeholder="Введите email, например ivanov@mail.ru" name="email">
  </div>
  <div class="form-group">
    <label>Ваш вопрос</label>
    <textarea class="form-control" placeholder="Введите ваше сообщения" name="message" id="main-textarea" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Заказать ремонт</button>
</form>