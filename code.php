  <!-- Main content -->
  <section class="content">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <form action="export-user.php">
                            <button type='submit'  class="btn btn-primary"><i class="fa fa-download"></i> Export All Users</button>
                        </form>
                        <br>
                        <div class="col-md-2">
                                <h4 class="box-title">Joined Date </h4>
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo (isset($_GET['date'])) ? $_GET['date'] : "" ?>"></input>
                        </div>
                        <div class="col-md-2">
                                <h4 class="box-title">Filter Users</h4>
                                <select id='activeusers' name="activeusers" class='form-control'>
                                        <option value="">All</option>
                                        <option value="1"<?php echo (isset($_GET['activeusers'])) ? 'selected' : "" ?>>Active Users</option>
                                </select>
                        </div>
                        <div class="col-md-2">
                        <h4 class="box-title">Filter by support</h4>
                           
                            <select id='support_id' name="support_id" class='form-control'>
                                <option value=''>All</option>
                                
                                        <?php
                                        $sql = "SELECT name FROM `staffs`";
                                        $db->sql($sql);
                                        $result = $db->getResult();
                                        foreach ($result as $value) {
                                        ?>
                                            <option value='<?= $value['id'] ?>'><?= $value['name'] ?></option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-2">
                                <h4 class="box-title">Status</h4>
                                <select id='status' name="status" class='form-control'>
                                        <option value="">All</option>
                                        <option value="0">Non Verfied</option>
                                        <option value="1">Verfied</option>
                                        <option value="2">Blocked</option>
                                </select>
                        </div>
                        <div class="col-md-1">
                        <h4 class="box-title">Filter by Month </h4>
                                    <select id='month' name="month" class='form-control'>
                                        <option value="">select</option>
                                            <?php
                                            $sql = "SELECT id,month FROM `months`";
                                            $db->sql($sql);
                                            $result = $db->getResult();
                                            foreach ($result as $value) {
                                            ?>
                                                <option value='<?= $value['id'] ?>'><?= $value['month'] ?></option>
                                        <?php } ?>
                                    </select>
                        </div>
                        <div class="col-md-1">
                        <h4 class="box-title">Referred By</h4>
                    
                                    <input type="text" class="form-control" name="referred_by" id="referred_by" >
                        </div>

                    </div>