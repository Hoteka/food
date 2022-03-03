<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom select</title>
  <link rel="stylesheet" href="../../js/userTest/userTest.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- Стили для страницы -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }

    .container {
      max-width: 450px;
      margin-left: auto;
      margin-right: auto;
    }
  </style>
  <!-- Подключаем CSS файл CustomSelect -->
  <link rel="stylesheet" href="../custom-select.css">
  <!-- Подключаем JavaScript файл CustomSelect -->
  <script defer src="../custom-select.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // инициализируем #select-1 как CustomSelect -->
      new CustomSelect('#select-1', {
        name: 'car',
        options: [
          ['volkswagen', 'Volkswagen'],
          ['ford', 'Ford'],
          ['toyota', 'Toyota'],
          ['nissan', 'Nissan']
        ]
      });
      // инициализируем #select-2 как CustomSelect -->
      new CustomSelect('#select-2');
    })
  </script>
</head>

<body>

  <div class="container">

    <div style="display: flex;">
      <div style="flex: 0 0 50%; padding: 15px;">

        <!-- селект #select-1 -->
        <div id="select-1"></div>

      </div>
      <div style="flex: 0 0 50%; padding: 15px;">

        <!-- селект #select-2 -->
        <!-- <div class="select" id="select-2">
          <button type="button" class="select__toggle" name="numbers" value="two" data-select="toggle" data-index="1">
            Two
          </button>
          <div class="select__dropdown">
            <ul class="select__options">
              <li class="select__option" data-select="option" data-value="one" data-index="0">One</li>
              <li class="select__option select__option_selected" data-select="option" data-value="two" data-index="1">Two</li>
              <li class="select__option" data-select="option" data-value="three" data-index="2">Three</li>
              <li class="select__option" data-select="option" data-value="four" data-index="3">Four</li>
              <li class="select__option" data-select="option" data-value="five" data-index="4">Five</li>
            </ul>
          </div>    
        </div> -->

      </div>
    </div>

  </div>
</body>
<script src="../../js/userTest/userTest.js"></script>
<script src="../../js/userTest/jquery.js"></script>
</html>