<style type="text/css">
    #temp2 .panel-default>.panel-heading {
        color: #e7eaec;
        background-color: #2b9c92/*#9de1fe*/;
        border-color: #ddd;
    }

    #temp2 .material-icons {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        vertical-align: middle;
    }
    #temp2 table {
        border-collapse: collapse;
        width: 100%;
    }

    #temp2 #text, #temp2 #ico {
        line-height: 50px;
    }
    #temp2 #text{
        padding-left: 120px;
        font-weight: bolder;
    }

    #temp2 #ico {
        vertical-align: middle;
    }
    hr.head{
        margin: 1px 0 1px 0;
    }
    .market_name{
        padding: 9px 0;
        text-align: center;
        font-weight: 500;
        font-size: 18px;
        letter-spacing: 1px;
        color: white;
        background: #46b6ac;
    }

    .card_border{
        border: 1px solid grey;
        margin: 0;
    }
    .mdl-card{
        width: auto;
    }
    .market_price{
        padding: 9px 0;
        position: absolute;
        bottom: 0;
        width: 100%;
        text-align: center;
        font-weight: 500;
        font-size: 18px;
        letter-spacing: 1px;
        color: white;
        background: #46b6ac;
    }
    .pl{
        overflow-y: scroll;
        height: 74%;
    }
</style>

<script type="text/javascript">
    var x, y, z;

    var selectable = new Array();
    $(document).ready(function () {

        $(".sc1").click(function () {

            var favorite = [], planid = [];
            $.each($("input[name='plan']:checked"), function () {
                favorite.push($(this).val());
                planid.push($(this).attr('id'));
            });

            Plan = favorite.join(", ");
            x = planid.join(", ");

            var favorite = [];
            $.each($("input[name='checker']:checked"), function () {
                favorite.push($(this).val());
            });
            y = favorite.join(", ");

            if (y == 'MARKET SPECIFIC') {
                document.getElementById('temp1').style.display = "block";
                document.getElementById('temp2').style.display = "none";

                document.getElementById('temp4').style.display = "block";
                document.getElementById('temp3').style.display = "none";

            } else if (y == 'SCRIPT SPECIFIC') {
                document.getElementById('temp2').style.display = "block";
                document.getElementById('temp1').style.display = "none";

                document.getElementById('temp3').style.display = "block";
                document.getElementById('temp4').style.display = "none";

            } else {
                document.getElementById('temp1').style.display = "none";
                document.getElementById('temp2').style.display = "none";
            }
        });


    });

    function type_card() {
        document.getElementById("te1").disabled = false;
    }

    function plan_card() {
        document.getElementById("tab1").disabled = false;
    }
// $('.type_card').click(function()
// {
//   $('#te1').removeAttr("disabled");
// });
    var obj, scriptId = [];

    $(document).ready(function () {

        //START
        $(document).on("click", ".mdl-checkbox__ripple-container.mdl-js-ripple-effect.mdl-ripple--center", function () {
            var getscriptID = $(this).parents().eq(2/*child number*/).children().eq(2).text();
            var parentID = $(this).parents().eq(2).attr('id');

            //DESELECT CHECKBOX
            function contains(a, b) {
                var i = a.length;
                while (i--) {
                    if (a[i] === b) {
                        scriptId.splice(i, 1);
                        return false;
                    }
                }
                return true;
            }

            function having(a, b) {
                var i = a.length;
                while (i--) {
                    if (a[i] === b) {
                        selectable.splice(i, 1);
                        return false;
                    }
                }
                return true;
            }

            if (contains(scriptId, parentID)) {
                scriptId.push(parentID);
            }
            if (having(selectable, getscriptID)) {
                selectable.push(getscriptID.toString());
            }
            //alert(scriptId);
            //alert(selectable);
            z = scriptId;
            obj = {"PLAN": x, "TYPE": y, "SELECTION": z};
        });
        //END
        //
        //MARKET SELECTION START
        $("input[name=ppp]:checkbox").change(function () {
            var mark = [], markId = [];
            $("input[name=ppp]:checkbox").each(function () {
                if ($(this).is(":checked")) {
                    mark.push($(this).attr("value"));
                    markId.push($(this).attr("id"));
                }
            });
            z = mark;
            obj = {"PLAN": x, "TYPE": y, "SELECTION": markId};

        });
        //MARKET SELECTION END

    });

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".cs").click(function () {
            var favorite = [];
            $.each($("input[name='ppp']:checked"), function () {
                favorite.push($(this).val());
            });
        });
    });
</script>
<style type="text/css">
    #log
    {
        margin: 1% 1% 1% 1%;
    }
</style>
<!-- DELETE POPOVER -->
<div class="container">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-body">
                    <p>Are You Sure You want to Delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">YES</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- DELETE POPOVER -->


<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">

        <div class="container">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#home">Plans</a></li>
                <li><a  href="#menu1">Subscription Type</a></li>
                <li><a  href="#menu2">Selection</a></li>
                <li><a  href="#menu3">Payment</a></li>
            </ul>

            <!--<div id="progressbar1" class="mdl-progress mdl-js-progress"></div>-->

            <div class="tab-content" >
                <!-- <form action=""> -->
                <!--Home Tab-->
                <div id="home" class=" tab-pane fade in active">

                    <div class="row">&nbsp;</div>
                    <div class="row" >
                        <button id="tab1" data-toggle="tab" onclick="menu1()" class="pull-right mdl-button mdl-js-button mdl-button--icon mdl-button--colored" disabled="true">
                            <i class="material-icons">arrow_forward</i>
                        </button>
                    </div>
                    <div class="row">&nbsp;</div>
                    <div class="row fade in active">
                        <?php
                        foreach ($plans->result_array() as $plan) {
                            ?>
                            <!--Start Plan Card-->
                            <div class="col-sm-4">
                                <label onclick="plan_card()" for="<?php echo $plan['id']; ?>" class="mdl-card__supporting-text mdl-checkbox__label">
                                    <div class="demo-card-square mdl-card mdl-shadow--2dp ">
                                        <div class="mdl-card__title mdl-card--expand">
                                            <h2 class="mdl-card__title-text"><?php echo $plan['name']; ?></h2>
                                        </div>
                                        <div class="mdl-card__supporting-text">
                                            <?php echo $plan['description']; ?>
                                        </div>
                                        <div class="mdl-card__actions mdl-card--border">

                                            <input type="radio" id="<?php echo $plan['id']; ?>" name="plan" value="<?php echo $plan['rate']; ?>" class="qwe mdl-checkbox__input">
                                            <span class="mdl-card__supporting-text mdl-checkbox__label"><?php echo $plan['name']; ?></span>

                                        </div>
                                    </div>
                                </label>
                            </div>

                            <!--End Plan Card-->
                            <?php
                        }
                        ?>

                    </div>
                </div>

                <!--Menu 1 Tab-->
                <div id="menu1" class="tab-pane fade">
                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <button data-toggle="tab" onclick="home()" class="pull-left mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                            <i class="material-icons">arrow_back</i> <!-- class="material-icons"-->
                        </button>

                        <button type="button" id="te1" onclick="menu2()" data-toggle="tab" class="sc1 pull-right mdl-button mdl-js-button mdl-button--icon mdl-button--colored" disabled="true">
                            <i class="material-icons">arrow_forward</i> <!-- class="material-icons"-->
                        </button>
                    </div>

                    <div class="row">&nbsp;</div>
                    <div class="row">
                        <div class="col-sm-4 col-md-offset-1">
                            <label for="marketspec" onclick="type_card()" class=" mdl-card__supporting-text mdl-checkbox__label">
                                <div class="demo-card-square mdl-card mdl-shadow--2dp ">
                                    <div class="mdl-card__title mdl-card--expand">
                                        <h2 class="mdl-card__title-text">Market Specific</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Aenan convallis.
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">

                                        <input type="radio" id="marketspec" name="checker" value="MARKET SPECIFIC" class="type_card mdl-checkbox__input">
                                        <span class="mdl-card__supporting-text mdl-checkbox__label">Market</span>

                                    </div>
                                </div>
                            </label>
                        </div>

                        <div class="col-sm-4 col-md-offset-1">
                            <label for="scriptspec" onclick="type_card()" class=" mdl-card__supporting-text mdl-checkbox__label">
                                <div class="demo-card-square mdl-card mdl-shadow--2dp ">
                                    <div class="mdl-card__title mdl-card--expand">
                                        <h2 class="mdl-card__title-text">Script Specific</h2>
                                    </div>
                                    <div class="mdl-card__supporting-text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Aenan convallis.
                                    </div>
                                    <div class="mdl-card__actions mdl-card--border">

                                        <input type="radio" id="scriptspec" name="checker" value="SCRIPT SPECIFIC" class="type_card mdl-checkbox__input chkbx">
                                        <span class="mdl-card__supporting-text mdl-checkbox__label">Script</span>

                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Menu2-->


                <div id="menu2" class="tab-pane fade">
                    <div class="row">&nbsp;</div>
                    <div class="row">

                        <button data-toggle="tab" id="not_back" onclick="menu1()" class="pull-left mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                            <i class="material-icons">arrow_back</i> <!-- class="material-icons"-->
                        </button>
                        <button id="nxtbtn" data-toggle="tab" onclick="menu3()" class=" cs pull-right mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                            <i class="material-icons">arrow_forward</i> <!-- class="material-icons"-->
                        </button>
                    </div>

                    <div id="temp2">
                        <div class="row">
                            <div class="mdl-card__actions">
                                <div id="mdl-table">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable is-upgraded is-focused pull-right">
                                        <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                                            <i class="material-icons">search</i>
                                        </label>
                                        <div class="mdl-textfield__expandable-holder">
                                            <input class="mdl-textfield__input search" type="text" id="sample6">
                                            <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                                        </div>
                                    </div>
                                    <table id='mdl-table' class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                                        <thead>
                                            <tr class="mdl-color" id="head" style="background-color: #46b6ac;">
                                                <th class="full-width mdl-data-table__cell--non-numeric sort" data-sort="material">Symbol Code</th>
                                                <th class="full-width mdl-data-table__cell--non-numeric material sort" data-sort="quantity">Code</th>
                                                <th class="full-width mdl-data-table__cell--non-numeric material sort" data-sort="price">Price Quote</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <?php
                                            foreach ($symbols->result_array() as $symbol) {
                                                ?>
                                                <tr id="<?php echo $symbol["id"]; ?>">
                                                    <td class="full-width mdl-data-table__cell--non-numeric material"><?php echo $symbol['name']; ?></td>
                                                    <td class="full-width mdl-data-table__cell--non-numeric material quantity"><?php echo $symbol['code']; ?></td>
                                                    <td class="full-width mdl-data-table__cell--non-numeric material"><?php echo $symbol['price_quote']; ?></td>
                                                </tr>
                                            <?php }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="log"></div>

                    <div id="temp1">
                        <div class="row"><!-- <h1>Market Specific</h1> -->
                            <?php
                            foreach ($markets->result_array() as $market) {
                                ?>

                                <div class="col-sm-4">
                                    <label for="mar<?php echo $market['id']; ?>" class="mdl-card__supporting-text mdl-checkbox__label">
                                        <div class="demo-card-square mdl-card mdl-shadow--2dp card_border ">
                                            <div class="market_name"><?php echo $market["name"]; ?></div>
                                            <div class="pl">
                                                <?php
                                                foreach ($symbols->result_array() as $symbol) {

                                                    if ($symbol['market_id'] == $market['id']) {
                                                        ?>
                                                        <div class="mdl-card__actions mdl-card--border">
                                                            <span class="mdl-card__supporting-text mdl-checkbox__label"><?php echo $symbol['name']; ?></span>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                                <!-- mar<?php echo $market['id']; ?> -->
                                            </div>
                                            <div class="market_price">
                                                <input type="checkbox" id="mar<?php echo $market['id']; ?>" value="<?php echo $market["name"]; ?>" name="ppp" class="mdl-checkbox__input">
                                                <span class="mdl-card__supporting-text mdl-checkbox__label">
                                                    <?php
                                                    foreach ($price->result_array() as $mprice) {
                                                        if ($mprice["market_id"] == $market["id"]) {
                                                            echo $mprice["price"];
                                                        }
                                                    }
                                                    ?></span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>


                </div>
                <!--Menu 3 Tab-->
                <div id="menu3" class="tab-pane fade">

                    <div class="row">&nbsp;</div>
                    <div id="temp3">
                        <div class="row">
                            <table id="finaltable" class="tb1 mdl-data-table mdl-js-data-table mdl-data-table__cell--non-numeric mdl-shadow--2dp">
                                <thead>

                                    <tr class="mdl-color" id="head" style="background-color: #46b6ac;">
                                        <th class="full-width mdl-data-table__cell--non-numeric">Material</th>
                                        <th class="full-width mdl-data-table__cell--non-numeric">Code</th>
                                        <th class="full-width mdl-data-table__cell--non-numeric">Unit price</th>
                                        <th class="full-width mdl-data-table__cell--non-numeric"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <script type="text/javascript">
                                    var multiplyer = 0;
                                    function abc() {
                                        for (var i = selectable.length - 1; i >= 0; i--) {
                                            var table = document.getElementById("finaltable");
                                            var row = table.insertRow(1);
                                            //                                        row.id = selectable[i];
                                            var cell1 = row.insertCell(0);
                                            var cell2 = row.insertCell(1);
                                            var cell3 = row.insertCell(2);
                                            var cell4 = row.insertCell(3);
                                            cell1.className = "full-width mdl-data-table__cell--non-numeric";
                                            cell2.className = "full-width mdl-data-table__cell--non-numeric";
                                            cell3.className = "price full-width mdl-data-table__cell--non-numeric";
<?php
foreach ($symbols->result_array() as $symbol) {
    ?>
                                                var code = "<?php echo $symbol['code']; ?>";
                                                if (selectable[i] === code) {

                                                    row.id = "<?php echo $symbol['id']; ?>";
                                                    cell1.innerHTML = "<?php echo $symbol['name']; ?>";
                                                    cell2.innerHTML = selectable[i];
                                                    var price =(<?php echo $symbol['price_quote']; ?> * Plan/100*obj["PLAN"]);
                                                    cell3.innerHTML = price;
                                                    cell4.innerHTML = '<i style="cursor: pointer; cursor: hand;" id="<?php echo $symbol['id']; ?>" onclick="delete_row(<?php echo $symbol['id']; ?>)" class="material-icons mdl-color-text--red">remove_circle_outline</i>'
                                                    //                                                        cell4.innerHTML = "<button onclick='delete_row(<?php echo $symbol['id']; ?>)' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>Delete</button>";
                                                }
<?php } ?>

                                        }
                                        colSum();
                                    }

                                    function delete_row(rowid) {
                                        var row = document.getElementById(rowid);
//                                            row.parentNode.removeChild(row);                                    
                                        row.parentNode.removeChild(row);
                                        var row = document.getElementById(rowid);
//                                            row.parentNode.removeChild(row);                                    
                                        row.parentNode.removeChild(row);
//                                            alert(selectable);
                                        actualDelete(rowid);
                                        colSum();
                                    }

                                    function actualDelete(rowID) {
                                        var i = obj["SELECTION"].length;
                                        while (i--) {
                                            if (obj["SELECTION"][i] == rowID) {
                                                obj["SELECTION"].splice(i, 1);
//                                                alert(obj["SELECTION"]);
                                            }
                                        }
                                    }


                                </script>
                                <tr>
                                    <th class="full-width mdl-data-table__cell--non-numeric"></th>
                                    <th class="full-width  mdl-data-table__cell--non-numeric">Amount Payable</th>
                                    <th id="mySum" class="full-width mdl-data-table__cell--non-numeric"></th>
                                    <th class="full-width  mdl-data-table__cell--non-numeric"></th>
                                </tr>

                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                    <script>
                        function market() {
                            for (var i = z.length - 1; i >= 0; i--) {
                                document.getElementById('mark_' + z[i]).style.display = "block";
                            }
                            calculate();
                        }
                        function deleteFinalMarket(myid) {
//                            alert(obj["SELECTION"] + " Row : " + myid);
                            actualDelete(myid);
                            document.getElementById(myid).style.display = "none";
                        }
                        function calculate() {
                            var sum = 0;
                            for (var i = z.length - 1; i >= 0; i--) {
                                sum += parseInt(document.getElementById('val_' + z[i]).value);
                            }
                            $('#pay').html("Pay Now (" + sum + ")");
                        }

                    </script>
                    <div id="temp4">
                        <div class="row"><!-- <h1>Market Specific</h1> -->
                            <?php
                            foreach ($markets->result_array() as $market) {
                                ?>

                                <div id="mark_<?php echo $market['name']; ?>" style="display:none" class="col-sm-4">
                                    <label for="mar<?php echo $market['id']; ?>" class="mdl-card__supporting-text mdl-checkbox__label">
                                        <div class="demo-card-square mdl-card mdl-shadow--2dp card_border ">
                                            <div class="market_name"><?php echo $market["name"]; ?></div>
                                            <div class="pl">
                                                <?php
                                                foreach ($symbols->result_array() as $symbol) {

                                                    if ($symbol['market_id'] == $market['id']) {
                                                        ?>
                                                        <div class="mdl-card__actions mdl-card--border">
                                                            <span class="mdl-card__supporting-text mdl-checkbox__label"><?php echo $symbol['name']; ?></span>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="market_price">
                                                <button id="mar<?php echo $market['id']; ?>" onclick='deleteFinalMarket(this.id)' class='mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent'>Delete</button>
                                                <span id="val_<?php echo $market['name']; ?>" class="mdl-card__supporting-text mdl-checkbox__label">
                                                    <?php
                                                    foreach ($price->result_array() as $mprice) {
                                                        if ($mprice["market_id"] == $market["id"]) {
                                                            echo $mprice["price"];
                                                        }
                                                    }
                                                    ?>

                                                </span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <input type="hidden" name="data">
                    <div class="row">
                        <button id="pay" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent pull-right" onclick="sendData()">
                            Pay Now
                        </button>
                    </div>

                </div>
                <script>
                    function colSum() {
                        var sum = 0;
                        //iterate through each input and add to sum
                        $('.price').each(function () {
                            sum += parseInt($(this).text());
                        });
                        //change value of total
                        $('#mySum').html(sum);
                        $('#pay').html("Pay Now (" + sum + ")");
                    }
                    function phpfun() {
                        var data = [];
                        var len = document.getElementById("finaltable").rows.length;
                        for (var i = 1; i < len - 1; i++) {
                            var dat = document.getElementById("finaltable").rows[i].id;
                            data.push(dat);
                        }
                        return false;
//                        location.href="<?php echo base_url(); ?>plan/insertSubSymbol/"+data+"/"+x+"/"+y;

                    }

                    $('#final').submit(function () {
                        return false;
//                        $('.hidden-image-data').val(imageData);
                    });
                    function sendData() {
//                        alert(JSON.stringify(obj));
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo base_url(); ?>Plan/insertPlan',
                            data: {json: JSON.stringify(obj)},
                            cache: false,
                            success: AjaxSucceeded,
                            error: AjaxFailed
                        });
                    }
                    function AjaxSucceeded(result) {
                        alert("Success");
//                        alert(result);
                        location.href = "<?php echo base_url(); ?>";
                    }
                    function AjaxFailed(result) {
                        alert("Failed");
//                        alert(result.status + ': ' + result.statusText);
                        location.href = "<?php echo base_url(); ?>";
                    }
                </script>
            </div>
        </div>
    </div>

</main>
