<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Тестовое по Ларавель</title>
</head>
<body>
<div class="container my-5">
    <h1 class="fs-5 fw-bold text-center">CSV импорт</h1>
    <div class="row">
        <div class="d-flex my-2">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Modal">
                Загрузить файл
            </button>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <table class="table table-responsive-sm table-striped table-hover table-bordered align-middle" style = 'zoom:70%'>
            <thead class = "table-dark">
            <tr>
                <th scope="col">Код</th>
                <th scope="col">Наименование</th>
                <th scope="col">Уровень1</th>
                <th scope="col">Уровень2</th>
                <th scope="col">Уровень3</th>
                <th scope="col">Цена</th>
                <th scope="col">ЦенаСП</th>
                <th scope="col">Количество</th>
                <th scope="col">Поля свойств</th>
                <th scope="col">Совместные покупки</th>
                <th scope="col">Единица измерения</th>
                <th scope="col">Картинка</th>
                <th scope="col">Выводить на главной</th>
                <th scope="col">Описание </th>

            </tr>
            </thead>
            <tbody>
            @foreach ($users as $key => $item)
                <tr>
                    <th scope="row">{{ $item->Код}}</th>
                    <td>{{ $item->Наименование}}</td>
                    <td>{{ $item-> Уровень1}}</td>
                    <td>{{ $item-> Уровень2}}</td>
                    <td>{{ $item-> Уровень3}}</td>
                    <td>{{ $item->Цена}}</td>
                    <td>{{ $item-> ЦенаСП}}</td>
                    <td>{{ $item-> Количество}}</td>
                    <td>{{ $item-> ПоляСвойств}}</td>
                    <td>{{ $item-> СовместныеПокупки}}</td>
                    <td>{{ $item->ЕдиницаИзмерения }}</td>
                    <td>{{ $item-> Картинка}}</td>
                    <td>{{ $item-> ВыводитьНаГлавной}}</td>
                    <td>{{ $item->Описание }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up">Вверх</i>
</button>
<style>
    #btn-back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
    }
</style>
<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Импорт данных</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
