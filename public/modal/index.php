<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/style.css?r=2">
    <script src="https://kit.fontawesome.com/4098fb5e0f.js" crossorigin="anonymous"></script>
</head>
<body style="background:none">

<div class="pnl2">
    <div class="mb-4">
        <a class="btn btn-secondary mr-3">Сохранить как черновик</a>
        <a class="btn btn-primary mr-3">Создать</a>
        <a href="#"><img src="/img/list/l1.svg" alt=""></a>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="row"><div class="col-6"><b>Название:</b></div><div class="col-6"><input type="text" class="form-control" value="Java разработчик"></div></div>
            <div class="row my-3"><div class="col-6"><b>Специализации:</b></div><div class="col-6">
                <select class="mst form-control"  multiple="multiple">
                    <option selected>IT</option>
                    <option selected>Программист</option>
                </select>
            </div></div>
            <div class="row mb-1"><div class="col-6"><b>Город:</b></div><div class="col-6"><input type="text" class="form-control" value="Москва"></div></div>
            <div class="row mb-1"><div class="col-6"><b>Адрес:</b></div><div class="col-6"><input type="text" class="form-control" value="м.Бабушкино"></div></div>
            <div class="row mb-1"><div class="col-6"><b>Зарплата:</b></div><div class="col-6"><input type="text" class="form-control" value="50 000 - 70 000 рублей"></div></div>
        </div>
        <div class="col-4 text-center">
            <img src="/img/video.svg" alt="" width="100">
            <div><a href="#">Добавить видеовизитку</a></div>
        </div>
    </div>   
   

    <div class="row my-4">
        <div class="col-4"><b>Навыки:</b></div>
        <div class="col-8">
            <select class="mst form-control"  multiple="multiple">
                <option selected>JAVA SE</option>
                <option selected>Spring Framework</option>
            </select>
        </div>
    </div>

    <div class="mb-4"><b>Задачи:</b> <textarea class="form-control"></textarea></div>

    <div class="row mb-4"><div class="col-4"><b>Условия работы:</b></div><div class="col-4"><select class="form-control">
        <option>Удаленка</option>
        <option>Полный рабочий день</option>
        <option>2/2</option>
    </select></div></div>
    <div class="mb-4"><b>Этапы воронки:</b> 
    <select class="ms form-control"  multiple="multiple">
        <option selected>Резюме</option>
        <option>Видеорезюме</option>
        <option selected>Tестирование</option>
        <option selected>SoftSkills</option>
        <option>HardSkills</option>
        <option selected>Tестовое задание</option>
        <option selected>Cобеседование</option>
        <option selected>Tрудоустройство</option>
    </select>
    <div class="mt-4"><a href="/page4"><b>Тестовое задание:</b> <i class="fas fa-plus-circle"></i></a> </div>
</div>







<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(".ms").select2({
        theme: "classic",
        language: "rus"
    })
    $(".mst").select2({
        theme: "classic",
        tags: true,
        language: "rus",
        tokenSeparators: [',', ' ']
    })
</script>
<style>
    .ms~.select2-container--classic .select2-selection--multiple .select2-selection__choice { background-color: #5A8FCC!important; }
    .mst~.select2-container--classic .select2-selection--multiple .select2-selection__choice { background-color: #D93632!important; }

    .select2-container--classic .select2-selection--multiple .select2-selection__choice {
        border-radius: 10px;
        color: white;
    }
    .select2-container--classic .select2-selection--multiple .select2-selection__choice__display {
        padding-left: 5px;
        padding-right: 2px;
    }
    .select2-container--classic .select2-selection--multiple .select2-selection__choice__remove {
        float: right;
        color: white;
    }
    .select2-container--classic .select2-selection--multiple {
        border: none;
    }
</style>
</body>
</html>