 <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Edit Filières
                                    <div class="page-title-subheading">Simple description.
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">

                                <button onclick="window.location.href='javascript:';" data-toggle="modal" data-target=".modalCat" class="mb-2 mr-2 btn-icon btn btn-primary btn-lg"><i class="pe-7s-plus btn-icon-wrapper"> </i>Ajouter Filières</button>
                            </div>    </div>
                    </div>
<div class="main-card mb-3 card">
   <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
                        <div class="card-body">
                            <form action="<?php echo base_url().'school/edit_category/'.$cat_info[0]['id'] ?>" id="update_sub_cat">
                            <div class="col-lg-3 offset-lg-4">
                            <div class="form-group">
                                <label>Nom Filière</label>
                                <input type="text" name="name" id="name" value="<?php echo $cat_info[0]['name'] ?>" placeholder="Entrer Nom Filière" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Edit" onclick="editCatF()" class="btn btn-primary">
                            </div>
                            </div>
                        </form>
                        </div>


