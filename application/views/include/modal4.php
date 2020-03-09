
    <!-- Large modal modalCat -->

<div class="modal fade modalestaff" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajouter Employé</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
            <form action="<?php echo base_url().'staff/manage_staff' ?>" id="add_staff_form">                
                <div class="form-group">
                    <label>Entrez Nom Employé: </label>
                    <input type="text" class="form-control" required="required" name="staff_lname" id="staff_lname" placeholder="Entrez nom de l'employé">
                </div>

                <div class="form-group">
                    <label>Entrez Prénom Employé: </label>
                    <input type="text" class="form-control" required="required" name="staff_fname" id="staff_fname" placeholder="Entrez Prenom de l'employé">
                </div>

                

                <div class="form-group">
                    <label>Entrez E-mail: </label>
                    <input type="email" class="form-control" required="required" name="staff_email" id="staff_email" placeholder="Entrez E-mail">
                </div>

                <div class="form-group">
                    <label>Entrez N°Telephone: </label>
                    <input type="text" class="form-control" required="required" name="mobile_no" id="mobile_no" placeholder="Entrez N°Telephone">
                </div>


                <div class="form-group">
                    <label>Fonctionnalité: </label>
                    <input type="text" class="form-control" required="required" name="staff_fonc" id="staff_fonc" placeholder="Fonctionnalité">
                </div>


                <div class="form-group">
                    <label>Expérience: </label>
                    <textarea name="staff_exp" id="staff_exp" cols="3"  class="form-control"  placeholder="Expérience"required></textarea>
                </div>
                

                <div class="form-group">
                    <label>Entrez Date de Naissance: </label>
                    <input type="date" class="form-control" required="required" name="staff_dob" id="staff_dob" placeholder="Entrez date de naissance de l'étudiant">
                </div>

                <div class="form-group">
                    <label>Entrez Date d'embauche</label>
                    <input type="date" class="form-control" required="required" name="join_date" id="join_date" placeholder="Entrez date d'inscription">
                </div>
                 <div class="form-group">
                    <label>Salaire employé: </label>
                    <input type="text" class="form-control" required="required" name="staff_sal" id="staff_sal" placeholder="Salaire employé">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" onclick="staff()" type="submit">Ajouter</button>

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