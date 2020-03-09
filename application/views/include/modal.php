
    <!-- Large modal modalCat -->

<div class="modal fade modalCat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Filière</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="<?php echo base_url().'school/category' ?>" id="add_category">                
                <div class="form-group">
                    <label>Entrer Nom Filière</label>
                    <input type="text" class="form-control" required="required" name="category" id="category" placeholder="Entrer Nom Filière">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" onclick="myFunction()" type="submit" id="submited">Ajouter</button>

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

 