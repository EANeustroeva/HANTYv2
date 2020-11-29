<div class="row">
    <div class="col-8">
            <table class="table">
                <thead>
            <tr>
                <td>Должность</td>
                <td>Дата</td>
                <td>Статус</td>
            </tr>
            </thead>
            <tbody>
            <tr class="sel">
            <td>Java Разработчик</td>
                <td class="text-sm">12.12.2020</td>
                <td>Ждет оценки</td>
            </tr>
            <?php for ($i=0;$i<10;$i++): ?>
            <tr>
                <td>Дизайнер</td>
                <td class="text-sm">16.12.2020</td>
                <td>80</td>
            </tr>
            <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <div class="col-4 d-flex flex-column">
        <img src="/img/pc3.svg" class="img-fluid w-100" alt="" style="margin-top: -260px;">
        <img src="/img/history.svg" class="img-fluid w-100 mt-auto" alt="">
    </div>
</div>
