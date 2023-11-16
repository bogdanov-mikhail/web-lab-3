<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAB 4</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php require './header.php' ?>
<div class="main">
    <div class="form_container">
        <div class="form_name_container">Заказ</div>
        <form action="http://localhost:8080/api/save-form" method="post" class="form">
            <input type="text" id="name" name="name" placeholder="Имя" class="form_input" required="required">
            <input type="text" id="surname" name="surname" placeholder="Фамилия" class="form_input" required="required">
            <input type="text" id="patronymic" name="patronymic" placeholder="Отчество" class="form_input">
            <input type="text" id="address" name="address" placeholder="Адрес доставки" class="form_input" required="required">
            <input type="tel" id="telephone" name="telephone" placeholder="Номер телефона" class="form_input" required="required">
            <input type="email" id="email" name="email" placeholder="Адрес электронной почты" class="form_input" required="required">
            <textarea id="message" name="message" class="form_textarea form_input" placeholder="Комментарий"></textarea>
            <div id="radio_sex_container">
                <input type="radio" id="sex" name="sex" value="man" class="sex_radio">
                <div class="sex_radio_label"> Мужчина</div>
                <input type="radio" id="sex" name="sex" value="woman" class="sex_radio">
                <div class="sex_radio_label"> Женщина</div>
            </div>
            <div id="check_box_container">
                <ul id="check_box_list">
                    <li>
                        <input type="checkbox" id="email_spam" name="spam" value="email" class="spam_checkbox">
                        <label class="check_box_label" for="email_spam">Электронная почта</label>
                    </li>
                    <li>
                        <input type="checkbox" id="phone_spam" name="spam" value="phone" class="spam_checkbox">
                        <label class="check_box_label" for="phone_spam">Смс</label>
                    </li>
                    <li>
                        <input type="checkbox" id="mail_spam" name="spam" value="mail" class="spam_checkbox">
                        <label class="check_box_label" for="mail_spam">Почта</label>
                    </li>
                </ul>
            </div>
            <input id="submit-button" type="submit" class="form_button form_input" value="Отправить">
        </form>
    </div>
</div>
<?php require './footer.php' ?>
</body>
</html>