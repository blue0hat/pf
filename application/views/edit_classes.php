 <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Edit Module
                                    <div class="page-title-subheading">Simple description.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">

                                <button onclick="window.location.href='javascript:';" data-toggle="modal" data-target=".modalClass" class="mb-2 mr-2 btn-icon btn btn-primary btn-lg"><i class="pe-7s-plus btn-icon-wrapper"> </i>Ajouter Modules</button>
                            </div>    </div>
                    </div>
<div class="main-card mb-3 card">
   <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
                        <div class="card-body">

                            <form action="<?php echo base_url().'school/edit_class/'.$classes[0]['id'] ?>" id="update_class">
                            <div class="col-lg-3 offset-lg-4">
                            <div class="form-group">
                                <label>Nom Module</label>
                                <input type="text" name="name" id="name" value="<?php echo $classes[0]['name'] ?>" placeholder="Entrer Nom Module" class="form-control">
                            </div><br>


                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="form-control" name="cat" id="cat">
                                    <option value=""> Select </option>
                                    <?php 

                                        foreach($cats as $c1){

                                            ?>
                                                <option <?php if ($c1['name']==$classes[0]['cat']) {echo "selected";} ?> > <?php echo $c1['name']; ?> </option>
                                            <?php

                                        }
                                     ?>
                                </select>
                            </div>


                            <div class="form-group">
                                <input type="submit" value="Edit" onclick="editClass()" class="btn btn-primary">
                            </div>
                            </div>
                        </form>
                        </div>