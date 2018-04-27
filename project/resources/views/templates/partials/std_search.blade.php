<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="text-center"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x modal-color-icon"></i><i class="fa fa-search fa-stack-1x fa-inverse"></i></span><br><?php //echo $lang["SEARCH_3"]; ?></h3>
            </div>
            <div class="modal-body row">
                <form class="col-md-10 col-md-offset-1 col-xs-12 col-xs-offset-0" action="search.php" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control input-lg" id="searched" name="searched" value="" placeholder="<?php //echo $lang["SEARCH_2"]; ?>" />
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
