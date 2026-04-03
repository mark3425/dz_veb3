<body>
    <div class="container">
        <h1>📝 Регистрационная анкета</h1>
        <div class="subtitle">Заполните все обязательные поля</div>
        
        <?php if (!empty($_GET['save']) && $_GET['save'] == 1): ?>
            <div class="success">✅ Данные успешно сохранены!</div>
        <?php endif; ?>
        
        <form method="POST" action="index.php">
            <!-- 1. ФИО -->
            <div class="form-group">
                <label class="required">ФИО</label>
                <input type="text" name="fio" value="<?= $fio_value ?>" placeholder="Иванов Иван Иванович">
            </div>
            
            <!-- 2. Телефон -->
            <div class="form-group">
                <label class="required">Телефон</label>
                <input type="tel" name="phone" value="<?= $phone_value ?>" placeholder="+7 999 123-45-67">
            </div>
            
            <!-- 3. Email -->
            <div class="form-group">
                <label class="required">Email</label>
                <input type="email" name="email" value="<?= $email_value ?>" placeholder="ivan@example.com">
            </div>
            
            <!-- 4. Дата рождения (обычное текстовое поле) -->
            <div class="form-group">
                <label class="required">Дата рождения</label>
                <input type="text" name="birthDate" value="<?= $birthDate_value ?>" placeholder="ДД.ММ.ГГГГ (например, 15.05.1990)">
                <div class="help-text">Формат: ДД.ММ.ГГГГ</div>
            </div>
            
            <!-- 5. Пол -->
            <div class="form-group">
                <label class="required">Пол</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male" <?= $gender_value === 'male' ? 'checked' : '' ?>> Мужской</label>
                    <label><input type="radio" name="gender" value="female" <?= $gender_value === 'female' ? 'checked' : '' ?>> Женский</label>
                </div>
            </div>
            
            <!-- 6. Любимые языки программирования -->
            <div class="form-group">
                <label class="required">Любимые языки программирования</label>
                <select name="programming_langs[]" multiple>
                    <?php foreach ($languages as $lang): ?>
                        <option value="<?= $lang ?>" <?= in_array($lang, $programming_langs_selected) ? 'selected' : '' ?>><?= $lang ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="help-text">Удерживайте Ctrl (Cmd) для выбора нескольких языков</div>
            </div>
            
            <!-- 7. Биография -->
            <div class="form-group">
                <label>Биография</label>
                <textarea name="bio" rows="4" placeholder="Расскажите о себе..."><?= $bio_value ?></textarea>
            </div>
            
            <!-- 8. Чекбокс контракта -->
            <div class="form-group">
                <div class="checkbox-group">
                    <input type="checkbox" name="contract" id="contract" <?= $contract_checked ?>>
                    <label for="contract" class="required">Я ознакомлен(а) с условиями контракта</label>
                </div>
            </div>
            
            <!-- 9. Кнопка -->
            <button type="submit">💾 Сохранить</button>
        </form>
    </div>
</body>
</html>
