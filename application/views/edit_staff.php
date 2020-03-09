<div class="content-wrapper">
    <div class="page_container">
        <div class="box">
            <h3>Modifier Employé</h3>
          <div style="padding-top: 50px;padding-left: 10px;padding-right: 10px">
              <div class="row">
                  <div class="col-sm-1"></div>
                  <div class="col-sm-10">
                       <form action="<?php echo base_url().'staff/edit_staff/'.$staff[0]['id'] ?>" id="edit_staff_form">                
                <div class="form-group">
                    <label>Entrez Nom Employé: </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $staff[0]['lname']; ?>" name="staff_lname" id="staff_lname" placeholder="Entrez nom de l'employé">
                </div>

                <div class="form-group">
                    <label>Entrez Prénom Employé: </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $staff[0]['fname']; ?>" name="staff_fname" id="staff_fname" placeholder="Entrez Prenom de l'employé">
                </div>

                

                <div class="form-group">
                    <label>Entrez E-mail: </label>
                    <input type="email" class="form-control" value="<?php echo $staff[0]['email']; ?>" required="required" name="staff_email" id="staff_email" placeholder="Entrez E-mail">
                </div>

                <div class="form-group">
                    <label>Entrez N°Telephone: </label>
                    <input type="text" class="form-control" required="required" name="mobile_no" value="<?php echo $staff[0]['mobile']; ?>" id="mobile_no" placeholder="Entrez N°Telephone">
                </div>


                <div class="form-group">
                    <label>Fonctionnalité: </label>
                    <input type="text" class="form-control" value="<?php echo $staff[0]['fonc']; ?>" required="required" name="staff_fonc" id="staff_fonc" placeholder="Fonctionnalité">
                </div>


                <div class="form-group">
                    <label>Expérience: </label>
                    <textarea name="staff_exp" id="staff_exp" cols="3"   class="form-control"  placeholder="Expérience"required><?php echo $staff[0]['exp']; ?></textarea>
                </div>
                

                <div class="form-group">
                    <label>Entrez Date de Naissance: </label>
                    <input type="date" class="form-control" required="required" value="<?php echo $staff[0]['dob']; ?>" name="staff_dob" id="staff_dob" placeholder="Entrez date de naissance de l'étudiant">
                </div>

                <div class="form-group">
                    <label>Entrez Date d'embauche</label>
                    <input type="date" class="form-control" required="required" name="join_date" value="<?php echo $staff[0]['jdate']; ?>" id="join_date" placeholder="Entrez date d'inscription">
                </div>
                 <div class="form-group">
                    <label>Salaire employé: </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $staff[0]['sal']; ?>" name="staff_sal" id="staff_sal" placeholder="Salaire employé">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" onclick="editStaff()" type="submit">Editer</button>

                </div>
            </form>            
                  </div>
                  <div class="col-sm-1"></div>
              </div>
          </div>
        </div>
    </div>
</div>