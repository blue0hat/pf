 <style type="text/css">
    label{
        color: black;
        font-weight: 600;
        font-size: 16px;
    }
    h3{
        font-weight: 600;
    }
</style>

 <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div><h3>Edit Etudiant</h3>
               
            </div>
        </div>
           </div>
    </div>
    <div class="main-card mb-3 card">
     <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
     <div class="modal-body" >
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <form action="<?php echo base_url().'student/edit_student/'.$student_data['id'] ?>" id="edit_student" class="col-12 d-block ajaxForm">                <legend style="text-align: center" class="btn btn-primary">Modifiez Information Personnelle d'Etudiant</legend>
                <div class="form-group">
                    
                    <label >Nom Etudiant: </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $student_data['name'] ?>" name="name" id="sname" placeholder="Entrez nom de l'étudiant">
                </div>

                <div class="form-group">
                    <label>Prénom Etudiant: </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $student_data['prenom'] ?>" name="prenom" id="prenom" placeholder="Entrez Prenom de l'étudiant">
                </div>

                 <div class="form-group">
                    <label>Adresse Etudiant: </label>
                    
                    <textarea type="text" class="form-control" required="required" value="<?php echo $student_data['adresse'] ?>" name="adresse" id="adresse" placeholder="Entrez Adresse d'étudiant"></textarea>
                </div>

                <div class="form-group">
                        <label>Sexe: </label>
                        <select name="sexe" required="required" id="sexe" class="form-control">
                            <option value=""> Sélectionnez  </option>
                            <option>Homme</option>
                            <option>Femme</option>

                        </select>
                    </div>

                <div class="form-group">
                    <label>E-mail: </label>
                    <input type="email" class="form-control" required="required" value="<?php echo $student_data['email'] ?>" name="email" id="email_user" placeholder="Entrez E-mail">
                </div>

                

                <div class="form-group">
                    <label>Filière: </label>
                    <select name="category" id="category" class="form-control">
                        <option value=""> Selectionnez une filière </option>
                        <?php 
                        foreach($all_category as $cat){
                            ?>
                            <option <?php if ( $student_data['category']==$cat['name']) { echo "selected";} ?>>
                                <?php echo $cat['name']; ?>
                            </option>
                            <?php
                        }

                        ?>

                    </select>
                </div>

                <!--<div class="form-group">
                    <label>Entrez Module: </label>
                    <select name="class" id="class" class="form-control">
                        <option value=""> Select </option>
                        <?php 

                        foreach($classes as $class){
                            ?>
                            <option <?php if ( $student_data['class']==$class['name']) { echo "selected";} ?>> <?php echo $class['name']; ?> </option>

                            <?php
                        }
                        ?>

                    </select>
                </div>!-->

                
                

                <label> Date de naissance: </label>
                    <div class="form-group">
                <div class="btn-group">
                        
                        
                        <input type="date" class="form-control" required="required" value="<?php echo $student_data['dob'] ?>" name="dob" id="dob" placeholder="Entrez date de naissance de l'étudiant">
                        
                        <label style="margin: 10px"> à </label>
                        

                        <input type="text" style="width: 500px" class="form-control" required="required" value="<?php echo $student_data['lieudenaissance'] ?>" name="lieudenaissance" id="lieudenaissance" placeholder="Entrez Lieu de naissance de l'étudiant">
                        
                       
                    </div>
                    </div>


                

                <div class="form-group">
                    <label>Entrez Date d'Inscription</label>
                    <input type="date" class="form-control" required="required" value="<?php echo $student_data['join_date'] ?>" name="join_date" id="join_date" placeholder="Entrez date d'inscription">
                </div>
                <div class="form-group">
                        <label>Choississez une photo </label>
                        <input type="file" class="form-control"  value="<?php echo $student_data['file'] ?>" name="file" id="file" placeholder="Entrez date d'inscription">
                    </div>
                <legend style="text-align: center" class="btn btn-primary">Modifiez Les Informations Personnelles des Parents ou Tuteur</legend>
                <div class="form-group">
                    <label>Nom (Parents ou Tuteur):</label>
                    <input type="text" class="form-control" required="required" value="<?php echo $student_data['nomparents'] ?>" name="nomparents" id="nomparents" placeholder="Entrez le nom des parents ou tuteur de votre étudiant">
                </div>

                <div class="form-group">
                    <label>E-mail: </label>
                    <input type="email" class="form-control" required="required" value="<?php echo $student_data['emailparents'] ?>" name="emailparents" id="emailparents" placeholder="Entrez E-mail">
                </div>

                 <div class="form-group">
                    <label>Numéro de Téléphone : </label>
                    <input type="text" class="form-control" required="required" value="<?php echo $student_data['telparents'] ?>" name="telparents" id="telparents" placeholder="Saississez Téléphone du Père">
                </div>

                

               
                <div class="form-group">
                    <button class="btn btn-primary" value="Edit" onclick="editStudent()" type="submit">Modifier</button>

                </div>
            </form>            
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>
</form>
</div>