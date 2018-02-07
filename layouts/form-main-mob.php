<form action="thank-you-mob.php" method="post">
  <div class="form-group">
    <label>Имя<span class="red">*</span></label>
    <input type="text" class="form-control" placeholder="Введите Фамилию и Имя" name="name-mob" required> 
  </div>
  <div class="form-group">
    <label>Телефон<span class="red">*</span></label>
    <input type="text" class="phone-field-mob form-control" placeholder="Введите номер телефона" name="phone-mob" required>
  </div>
  <div class="form-group">
    <label>Email (электронная почта)</label>
    <input type="email" class="form-control" placeholder="Например, ivanov@mail.ru" name="email-mob">
  </div>
  <div class="form-group">
    <label>Ваш вопрос</label>
    <textarea class="form-control" placeholder="Введите ваше сообщение" name="message" id="main-textarea" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Заказать ремонт</button>
</form>