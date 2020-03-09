<?php
     $hamzac = 1;
 ?>
 <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Modules <span class="badge badge-info" style="margin-left: 5px"><?php echo sizeof($classes) ?></span>
                                    <div class="page-title-subheading">Simple description.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">

                                <button onclick="window.location.href='javascript:';" data-toggle="modal" data-target=".modalClass" class="mb-2 mr-2 btn-icon btn btn-primary btn-lg"><i class="pe-7s-plus btn-icon-wrapper"> </i>Ajouter Filières</button>
                            </div>    </div>
                    </div>
<div class="main-card mb-3 card">
   <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
                        <div class="card-body">
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                        foreach ($classes as $cat) {
                                                                       
                                     ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $cat['name']; ?></td>
                                    <td><?php echo $cat['cat']; ?></td>
                                    <td><input type="checkbox" <?php if ($cat['status']==1) { echo "checked"; } ?> name="status"></td>
                                    <td>
                                    	<a href="<?php echo base_url().'school/edit_class/'.$cat['id'] ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Modifier"><i class="fas fa-pen-square fa-lg"></i></a>
                                    	<a href="<?php echo base_url().'school/delete_class/'.$cat['id'] ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" onclick="deleteCat()" title="Supprimer"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                               <?php $i++; } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Category</th>
                                    <th>Statu</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>


