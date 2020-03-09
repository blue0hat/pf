   <!-- Large modal modalClass -->

<div class="modal fade modalClass" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Filière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="<?php echo base_url().'school/classes' ?>" id="add_class_form">                
                <div class="form-group">
                    <label>Entrer Nom Module</label>
                    <input type="text" class="form-control" required="required" name="name" id="name" placeholder="Entrer Nom Module">
                </div>
                <div class="form-group">
                    <label>Select Module</label>
                    <select class="form-control" required="required" name="cat" id="cat">
                        <option value=""> Select </option>
                        <?php 
                            foreach ($cats as $c1) {
                                ?>
                                <option><?php echo $c1['name']; ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" onclick="addModule()" type="submit" id="submited">Ajouter</button>

                </div>
            </form>            
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- fin Large modal modalCat -->