
<!-- Large modal modalCat -->
<style type="text/css">
    label{
        color: black;
        font-weight: 600;
        font-size: 16px;
    }

</style>

<div class="modal fade modaletud" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" >Ajouter Etudiant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?php echo base_url().'student/student_registration' ?>" id="add_student">  <p style="float: right;">(*) Champs Obligatoires</p>              
                    <div class="form-group">

                        <label>Veuillez saisir le nom de votre Etudiant * : </label>
                        <input type="text" class="form-control" required="required" name="name" id="sname" placeholder="Saississez un nom de l'étudiant">
                    </div>

                    <div class="form-group">
                        <label>Veuillez saisir le prénom de votre Etudiant * : </label>
                        <input type="text" class="form-control" required="required" name="prenom" id="prenom" placeholder="Saississez un prénom de l'étudiant">
                    </div>
                    <div class="form-group">
                        <label>Veuillez saisir l'adresse de votre Etudiant * : </label>
                        
                        <textarea class="form-control" required="required" name="adresse" id="adresse" ></textarea>
                    </div>

                     <div class="form-group">
                        <label>Veuillez sasir E-mail Etudiant * : </label>
                        <input type="email" class="form-control" required="required" name="email" id="email_user" placeholder="Saississez E-mail">
                    </div>

                    <div class="form-group">
                        <label>Sexe * : </label>
                        <select name="sexe" required="required" id="sexe" class="form-control">
                            <option value=""> Sélectionnez  </option>
                            <option>Homme</option>
                            <option>Femme</option>

                        </select>
                    </div>

                    
                
                
               


                   

                    <div class="form-group">
                        <label>Filière: </label>
                        <select name="category" id="category" class="form-control">
                            <option value=""> Sélectionnez Filière </option>
                            <?php 
                            foreach($all_category as $cat){
                                ?>
                                <option>
                                    <?php echo $cat['name']; ?>
                                </option>
                                <?php
                            }

                            ?>

                        </select>
                    </div>

                   <!-- <div class="form-group">
                        <label>Module: </label>
                        <select name="class" id="class" class="form-control">
                            <option value=""> Sélectionnez un module </option>
                            <?php 

                            foreach($classes as $class){
                                ?>
                                <option> <?php echo $class['name']; ?> </option>

                                <?php
                            }
                            ?>

                        </select>
                    </div> !-->


                      <label> Date de Naissance de votre Etudiant * : </label>
                    <div class="form-group">
                <div class="btn-group">
                        
                        
                        <input type="date" class="form-control" required="required"  name="dob" id="dob" placeholder="Entrez date de naissance">
                        
                        <label style="margin: 10px"> à </label>
                        

                        <input type="text" style="width: 550px" class="form-control" required="required"  name="lieudenaissance" id="lieudenaissance" placeholder="Saississez Lieu de naissance">
                        
                       
                    </div>
                    </div>

                    

                    <div class="form-group">
                        <label>Entrez Date d'Inscription * :</label>
                        <input type="date" class="form-control" required="required" name="join_date" id="join_date" placeholder="Entrez date d'inscription">
                    </div>

                    <div class="form-group">
                        <label>Choisissez une photo * :</label>
                        <input type="file" class="form-control" required="required" name="file" id="file" placeholder="Entrez date d'inscription">
                    </div>
                    <p style="text-align: center; font-weight: bold; height: 40px">Informations personnelles des Parents ou Tuteur</p>
                   <div class="form-group">
                    <label>Vueillez saisir son Nom (Parents ou Tuteur) * :</label>
                    <input type="text" class="form-control" required="required"  name="nomparents" id="nomparents" placeholder="Saississez Nom des parents ou tuteur d'étudiant">
                </div>

                 <div class="form-group">
                    <label>Veuillez saisir son E-mail : </label>
                    <input type="email" class="form-control"   name="emailparents" id="emailparents" placeholder="Saississez E-mail ">
                </div>
                    
                <div class="form-group">
                    <label>Veuillez saisir Son Numéro de Téléphone * : </label>
                    <input type="text" class="form-control" required="required"  name="telparents" id="telparents" placeholder="Saississez Téléphone du Père">
                </div>

   
                
                    
                   

                    <div class="form-group text-center">
                        <button class="btn btn-primary" onclick="addStudent()" type="submit">Ajouter</button>

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