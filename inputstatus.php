                                                    <div class="modal fade" id="myModal1<?php echo $data['id']; ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="Label">Edit Data Inventory</h5>
                                                                    <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> -->
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" method="post" name="" id="">
                                                                        <div class="f-group">
                                                                            <label for="">Unit/Ins/Ruang</label>
                                                                            <input type="text" placeholder="Status" name="input-status" class="form-control" value="<?php echo $data['status']; ?>">
                                                                        </div>

                                                                        <button type="submit" name="update" id="update" class="btn btn-success mt-3 ml-2 float-right">Submit</button>
                                                                        <button type="button" class="btn btn-danger mt-3 float-right" data-dismiss="modal">Close</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    include "conn.php";

                                                    if (isset($_POST['update'])) {
                                                        $inputStatus = $_POST['input-status'];
                                                        // $id = $_POST['id'];
                                                        $sql2 = " UPDATE emr_kotaksaran set status='$inputStatus' ";
                                                        $query2 = sqlsrv_query($conn, $sql2) or die(sqlsrv_errors());;
                                                        if ($query) {
                                                            //redirect ke halaman index
                                                            // header("location: inventory.php");
                                                            echo "<script> alert(
                                                                    'Sip,Berhasil update lek!',
                                                                    'Mantap Sekali',
                                                                    'success') </script>";
                                                            echo '<script language="javascript">document.location="inventory.php";</script>';
                                                        } else {
                                                            die(print_r(sqlsrv_errors(), true));
                                                        }
                                                    }
                                                    ?>