<html lang="">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="public/css/basic.css"  />
    <title></title>

</head>
<body>
<div class="pl-5 pr-5 pt-5">
    <form method="post">
        <div class="row">
            <div class="form-group pr-3">
                <label for="ekkate">EKATTE</label>
                <input type="text" class="form-control" name="ekatte" id="EKATTE" aria-describedby="EKATTE"
                       placeholder="EKATTE">
            </div>

            <div class="form-group pr-3">
                <label for="tvm">Вид</label>
                <select class="form-control" name="tvm" id="tvm">
                    <option value="">избери</option>
                    <?php foreach ($dataFilters['tvm'] as $tvm) {

                        echo "<option value='" . $tvm['t_v_m'] . "'>" . $tvm['t_v_m'] . "</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group pr-3">
                <label for="name">Име</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Име">

            </div>
            <div class="form-group pr-3">
                <label for="name_en">Транслитерация</label>
                <input type="text" class="form-control" name="name_en" id="name_en" placeholder="Транслитерация">

            </div>

            <div class="form-group pr-3">
                <label for="code_area">Код на областта</label>
                <select class="form-control" name="code_area" id="code_area">
                    <option value="">избери</option>
                    <?php foreach ($dataFilters['area'] as $area) {
                        echo "<option value='" . $area . "'>$area</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group pr-3">
                <label for="name_area">Име на областта</label>
                <input type="text" class="form-control" name="name_area" id="name_area" placeholder="Име на областта">

            </div>
            <div class="form-group pr-3">
                <label for="municapility">Код на общината</label>
                <input type="text" class="form-control" name="municapility" id="municapility"
                       placeholder="Код на общината">

            </div>
            <div class="form-group pr-3">
                <label for="name_municapility">Име на общината</label>
                <input type="text" class="form-control" name="name_municapility" id="name_municapility"
                       placeholder="Име на общината">

            </div>
            <div class="form-group pr-3">
                <label for="townhall">Кметство</label>
                <input type="text" class="form-control" name="townhall" id="townhall" placeholder="Кметство">

            </div>
            <div class="form-group pr-3">
                <label for="nuts1">NUTS1</label>
                <input type="text" class="form-control" name="nuts1" id="nuts1" placeholder="NUTS1">

            </div>
            <div class="form-group pr-3">
                <label for="nuts2">NUTS2</label>
                <input type="text" class="form-control" name="nuts2" id="nuts2" placeholder="NUTS2">

            </div>
            <div class="form-group pr-3">
                <label for="nuts3">NUTS3</label>
                <input type="text" class="form-control" name="nuts3" id="nuts3" placeholder="NUTS3">

            </div>


            <div class="form-group pr-3">
                <label for="kind">Код на типа</label>
                <select class="form-control" id="kind" name="kind">
                    <option value="">избери</option>
                    <?php foreach ($dataFilters['kind'] as $area) {
                        echo "<option value='" . $area . "'>$area</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group pr-3">
                <label for="category">Код на категорията</label>
                <select class="form-control" id="category" name="category">
                    <option value="">избери</option>
                    <?php foreach ($dataFilters['category'] as $area) {
                        echo "<option value='" . $area . "'>$area</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group pr-3">
                <label for="altitude">Надморска височина</label>
                <select class="form-control" id="altitude" name="altitude">
                    <option value="">избери</option>
                    <?php foreach ($dataFilters['altitude'] as $area) {
                        echo "<option value='" . $area . "'>$area</option>";
                    } ?>
                </select>
            </div>
            <div class="form-group pr-3">
                <label for="document">Код на документа</label>
                <input type="text" class="form-control" name="document" id="document" placeholder="Код на документа">

            </div>
            <div class="form-form-group pr-3 mt-4 pt-2">
                <button class="btn btn-success" type="submit">Филтрирай</button>
            </div>
        </div>

    </form>
    <div class="pt-4 pl-4 pr-4">
        <table class="data-table">
            <thead>
            <tr>
                <th>
                    <button id="name">ЕКАТТЕ</button>
                </th>
                <th>
                    <button id="name">Вид</button>
                </th>
                <th>
                    <button id="name_area">Име на областта</button>
                </th>
                <th>
                    <button id="name">Име на населено място</button>
                </th>
                <th>
                    <button id="name_en">Транслитерация</button>
                </th>
                <th>
                    <button id="code_area">Код на областта</button>
                </th>
                <th>
                    <button id="municapility">Код на общината</button>
                </th>
                <th>
                    <button id="name_municapility">Име на общината</button>
                </th>
                <th>
                    <button id="townhall">Кметство</button>
                </th>
                <th>
                    <button id="nuts1">NUTS1</button>
                </th>
                <th>
                    <button id="nuts2">NUTS2</button>
                </th>
                <th>
                    <button id="nuts3">NUTS3</button>
                </th>
                <th>
                    <button id="kind">Код на типа</button>
                </th>
                <th>
                    <button id="category">Код на категорията</button>
                </th>
                <th>
                    <button id="altitude">Надморска височина</button>
                </th>
                <th>
                    <button id="document">Код на документа</button>
                </th>
            </tr>
            </thead>
            <tbody id="table-content"></tbody>
        </table>
    </div>
</div>

<script>
    const response = {
        "pokedata": <?php echo $requestedData;?>

    }
</script>
<script src="public/javascript/basic.js"></script>

</body>

</html>
