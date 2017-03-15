
<!-- DELETE POPOVER -->
<!--<div class="container">
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
 DELETE POPOVER 

 ADD MARKET FORM START 
<div class="container">
    <div id="addMarket" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="format" action="<?php echo base_url(); ?>Admin/market/addMarket" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="name" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">New Market Name</label>
                        </div>

                        <div class="modal-footer">
                            <button class="pull-left mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> ADD  </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 ADD MARKET FORM OVER 
<script type="text/javascript">
    $('.actionShow').click(function () {
        var btnid=this.id;
        showDialog({
            title: 'Action',
            text: 'This dialog can be closed by pressing ESC or clicking outside of the dialog.<br/>Pressing "YAY" will fire the configured action.',
            negative: {
                title: 'NO'
            },
            positive: {
                title: 'YES',
                onClick: function (e) {
                    alert(btnid);
                }
            }
        });
    });
    
</script>
 ADD NEW MEMBER FORM START 
<div class="container">
    <div id="addSymbol" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="format" action="<?php echo base_url(); ?>Admin/market/addSymbol" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="name" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">New Symbol Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="code" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Symbol Code</label>
                        </div>

                        //marketId

                        <input type="text" name="marketId" value="<?php echo $market_id; ?>" placeholder="<?php echo $market_id; ?>" hidden="1">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" name="price" type="number" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Current Price</label>
                        </div>
                        <div class="modal-footer">
                            <button class="pull-left mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> ADD  </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 ADD NEW SYMBOL FORM OVER 
<style type="text/css">
/*    .ScrollStyle
    {
        overflow-y: scroll;
    }
    #element::-webkit-scrollbar { 
        display: none; 
    }
    .ScrollStyle::-webkit-scrollbar { 
        display: none; 
    }
     Let's get this party started 
    .ScrollStyle::-webkit-scrollbar {
        width: 5px;

    }

     Track 
    .ScrollStyle::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        -webkit-border-radius: 7px;
        border-radius: 7px;
    }

     Handle 
    .ScrollStyle::-webkit-scrollbar-thumb {
        -webkit-border-radius: 10px;
        border-radius: 10px;
        background: #2e9089; 
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    }
    .ScrollStyle::-webkit-scrollbar-thumb:window-inactive {
        background: rgba(255,0,0,0.4); 
    }*/
</style>-->

<script>
    function popup(id){
        showDialog({
            title: 'Delete Symbol',
            text: 'Are You Sure You Want to Delete?',
            negative: {
                title: 'No'
            },
            positive: {
                title: 'Yes',
                onClick: function (e) {
                    document.location.href = '<?php echo base_url() . "admin/market/removeSymbol/" ; ?>' + id + '<?php echo "/" . $market_id; ?>';
                }
            }
        });
    }
    </script>
<div class="modal fade" id="importCSV" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <!-- content goes here -->
        <form action="<?php echo base_url(); ?>Admin/market/addMarket" method="post">
            <div class="mdl-card mdl-shadow--6dp">
                <div class="mdl-card__title mdl-color--primary mdl-color-text--white">
                    <h2 class="mdl-card__title-text">IMPORT CSV</h2>
                </div>

                <form action="import.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" id="file"> </br> </br>
                    <input type="text" name="marketId" placeholder="Enter marketId"> </br> </br>
                    <!-- <button type="submit" id="submit" name="Import">Upload</button> -->
                    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect pull-left" type="submit" id="submit" name="Import">Upload</button>
                </form>
            </div>
        </form>
    </div>
</div>

<main class="mdl-layout__content">    
    <div class="row mdl-grid">
        <div class="mdl-card__actions">
            <div id="mdl-table">

<!--                <button data-toggle="modal" data-target="#addSymbol" tabindex="-1" id="adsym" class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                    <i class="material-icons" >add</i>
                </button>-->
                
                <div  class=" mdl-textfield mdl-js-textfield mdl-textfield--expandable is-upgraded is-focused pull-right">
                    <label id="search" class="op mdl-button mdl-js-button mdl-button--icon" for="sample6">
                        <i class="material-icons">search</i>
                    </label>

                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input search" type="text" id="sample6">
                        <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                    </div>
                    <!-- <i data-toggle="modal" data-target="#addSymbol" tabindex="-1" id="adsym"  class="material-icons  mdl-color-text--cyan">add_circle_outline</i> -->
                    
                        <i class="material-icons" id="hd">more_vert</i>
                    
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hd">
                        <li class="mdl-menu__item">
                            
                            <a data-toggle="modal" data-target="#importCSV" class="">
                            <!-- &nbsp;&nbsp;<i class="sidebar-icon material-icons">add_box</i> -->
                            Import CSV
                        </a>
                        </li>
                        <li class="mdl-menu__item">Add Symbol</li>
                        
                    </ul>

                </div>

                <table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric sort" data-sort="material">Name</th>
                            <th class="mdl-data-table__cell--non-numeric material sort" data-sort="quantity">Code</th>
                            <th class="mdl-data-table__cell--non-numeric material sort" data-sort="price" colspan="2">Price Quote</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <?php
                        foreach ($symbols->result_array() as $symbol) {
                            ?>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric material"><?php echo $symbol['name']; ?></td>
                                <td class="mdl-data-table__cell--non-numeric material quantity"><?php echo $symbol['code']; ?></td>
                                <td class="mdl-data-table__cell--non-numeric material price"><?php echo $symbol['price_quote']; ?></td>
                                <td>
                                    <!--<button id="<?php echo $symbol['id'];?>" onclick="document.location.href = '<?php echo base_url() . 'admin/market/removeSymbol/' . $symbol['id'] . '/' . $market_id; ?>'"  class="mdl-button mdl-js-button mdl-button--raised">-->
                                    <i id="<?php echo $symbol['id'];?>" onclick="popup(this.id)" class="material-icons mdl-color-text--red">remove_circle_outline</i>
                                    <!--</button>-->
                                    
<!--                                    <i id="<?php echo $symbol['id']; ?>"  class=" marketDelete material-icons mdl-color-text--red">remove_circle_outline</i>       -->
                                    <!--onclick="document.location.href = '<?php // echo base_url() . 'admin/market/removeSymbol/' . $symbol['id'] . '/' . $market_id; ?>'"-->
                                </td>
                            </tr>
                        <?php }
                        ?>
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>
</main>