<html>

<head>
    <meta charset="UTF-8" />
    <title>mockup strona edycji książkomat</title>
    <meta name="description" content="mockup książkomatu" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <h1>Książkomat biblioteka dla dzieci nr 2</h1>
    <h2>ulica Błotna 44</h2>
    <form>
        <div class="edycja">

            <div class="flekser"><a href=""><span class="box-number">22</span></a>
                <div class="panel-checkboxes"><label>skrytka pełna<br><input type="checkbox"></label></div>
                <div class="panel-checkboxes"><input type="reset" value="wyczyść dane"></span></div>
            </div>
            <div class="descriptive-container">
                <div class="descriptive-container-end"><label for="title">Tytuł</label></div>
                <div class=""><input class="" type="text" name="title" id="box-22" value="<!-- z bazy albo puste -->">
                </div>
                <div class="descriptive-container-end"><label for="secret-code" class="">kod do skrytki</label></div>
                <div class=""><input class="" id="secret-code-22" name="secret-code" value="<!-- z bazy albo puste -->"
                        type="number"></div>
                <div class="descriptive-container-end"><label for="end-date" class="">data opróżnienia</label></div>
                <div class=""><input class="" id="end-date-22" name="end-date"
                        value="<!-- z bazy albo dzisiejsza + 3 -->" type="date"></div>
                <div class="descriptive-container-end"><label for="title" class="">id czytelnika</label></div>
                <div class=""><input class="" id="id-user-22" name="id-user" value="<!-- z bazy albo puste -->"
                        type="number"></div>
            </div>
        </div>

        <input type="button" value="Zapisz zmiany i idź na stronę główną">
    </form>
</body>

</html>