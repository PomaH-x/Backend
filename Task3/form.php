<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Task3</title>
</head>
<body>
  <div class="form">
    
<form action="" method="POST">
  <label for="fio">ФИО:</label>
  <input name="fio" id="fio" placeholder="Иванов Иван Иванович" />

  <label for="field-tel">Телефон:</label>
  <input name="field-tel" id="field-tel" type="tel" placeholder="Введите ваш телефон" />

  <label for="field-email">Email:</label>
  <input name="field-email" id="field-email" type="email" placeholder="Введите вашу почту" />

  <label for="field-date">Введите дату рождения:</label>
  <input name="field-date" id="field-date" value="2003-10-13" type="date" />

  <label>Выберете ваш пол:</label>
  <label><input type="radio" checked="checked" name="gender" value="Male" /> Мужчина</label>
  <label><input type="radio" name="gender" value="Female" /> Женщина</label>

  <label for="favorite-langs">Выберете ваши любимые языки программирования:</label>
  <select name="favorite-langs[]" id="favorite-langs" multiple>
    <option value="Pascal">Pascal</option>
    <option value="JavaScript">JavaScript</option>
    <option value="PHP">PHP</option>
    <option value="Python">Python</option>
    <option value="Haskel">Haskel</option>
    <option value="Clojure">Clojure</option>
    <option value="Prolog">Prolog</option>
    <option value="Scala">Scala</option>
  </select>

  <label for="bio">Ваша биография:</label>
  <textarea name="bio" id="bio" cols="90" rows="10" placeholder="Что-то о себе..."></textarea>

  <label><input type="checkbox" class="checkbox" checked="checked" name="check-1" />C контрактом ознакомлен(а)</label>

  <input class="button" type="submit" value="Сохранить" />
</form>
</body>
</html>