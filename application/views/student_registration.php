 
    <!-- Large modal modalCat -->
<style type="text/css">
   body{
    margin-top:20px;
    background:#f3f3f3;
}

.card.user-card {
    border-top: none;
    -webkit-box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
    box-shadow: 0 0 1px 2px rgba(0,0,0,0.05), 0 -2px 1px -2px rgba(0,0,0,0.04), 0 0 0 -1px rgba(0,0,0,0.05);
    -webkit-transition: all 150ms linear;
    transition: all 150ms linear;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-header {
    background-color: transparent;
    border-bottom: none;
    padding: 25px;
}

.card .card-header h5 {
    margin-bottom: 0;
    color: #222;
    font-size: 14px;
    font-weight: 600;
    display: inline-block;
    margin-right: 10px;
    line-height: 1.4;
}

.card .card-header+.card-block, .card .card-header+.card-block-big {
    padding-top: 0;
}

.user-card .card-block {
    text-align: center;
}

.card .card-block {
    padding: 25px;
}

.user-card .card-block .user-image {
    position: relative;
    margin: 0 auto;
    display: inline-block;
    padding: 5px;
    width: 110px;
    height: 110px;
}

.user-card .card-block .user-image img {
    z-index: 20;
    position: absolute;
    top: 5px;
    left: 5px;
        width: 100px;
    height: 100px;
}

.img-radius {
    border-radius: 50%;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-25 {
    margin-top: 25px;
}

.m-t-15 {
    margin-top: 15px;
}

.card .card-block p {
    line-height: 1.4;
}

.text-muted {
    color: #919aa3!important;
}

.user-card .card-block .activity-leval li.active {
    background-color: #2ed8b6;
}

.user-card .card-block .activity-leval li {
    display: inline-block;
    width: 15%;
    height: 4px;
    margin: 0 3px;
    background-color: #ccc;
}

.user-card .card-block .counter-block {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}

.m-t-10 {
    margin-top: 10px;
}

.p-20 {
    padding: 20px;
}

.user-card .card-block .user-social-link i {
    font-size: 30px;
}

.text-facebook {
    color: #3B5997;
}

.text-twitter {
    color: #42C0FB;
}

.text-dribbble {
    color: #EC4A89;
}

.user-card .card-block .user-image:before {
    bottom: 0;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
}

.user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
    content: "";
    width: 100%;
    height: 48%;
    border: 2px solid #4099ff;
    position: absolute;
    left: 0;
    z-index: 10;
}

.user-card .card-block .user-image:after {
    top: 0;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
}

.user-card .card-block .user-image:after, .user-card .card-block .user-image:before {
    content: "";
    width: 100%;
    height: 48%;
    border: 2px solid #4099ff;
    position: absolute;
    left: 0;
    z-index: 10;
} 
    
</style>

 <div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Etudiants <span class="badge badge-info" style="margin-left: 5px"><?php echo sizeof($students) ?></span>
                <div class="page-title-subheading">
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button onclick="window.location.href='javascript:';" data-toggle="modal" data-target=".modaletud" class="mb-2 mr-2 btn-icon btn btn-primary btn-lg"><i class="pe-7s-plus btn-icon-wrapper"> </i>Ajouter Etudiant </button>
        </div>    </div>
    </div>
    <div class="main-card mb-3 card">
     <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
     <div class="card-body">
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            
            <div class="form-group">
            	<div class="btn-group">
                        <label class="col-sm-2 col-form-label">Filière: </label>
						<form action="" method="get">
                        <select name="getcat" style="width: 300px;" id="getcat" class="form-control">
                            <option value=""> Groupes </option>
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
                        <button type="submit" name="sb" class="btn btn-primary" style="margin-left: 10px;"  data-toggle="tooltip" data-placement="bottom" title="Filtrer"><i class="fas fa-filter"></i></button>
                        

                        <button class="btn btn-primary" style="margin-left: 10px;" data-toggle="tooltip" data-placement="bottom" title="Effacer"><i class="fas fa-backspace"></i></button>
                        
                        </form>
                    </div>
                    </div>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                    <th>Filière</th>
                    <!--<th>Module</th> !-->
                   <th>Date de Naissance</th> 
     
                   <!-- <th>Date d'inscription</th>!-->
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $i=1;
                foreach ($students as $student) {
                 
                   ?>
                   <tr>
                    <td><?php echo $i; ?></td>
                    
                    <td style=" margin:20px"><img  alt="Avatar 5" class="rounded-circle" width="60" height="60" src="<?php echo base_url().'uploads/student_registration/'.$student['file'] ?>"></td>
                     <!--  <td><a target="_blank" href="<?php echo base_url().'uploads/student_registration/'.$student['file'] ?>" class="btn btn-info"><i class="fa fa-download"></i></a></td> !-->
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['prenom'] ?></td>
                    <td><?php echo $student['sexe'] ?></td>
                    <td><?php echo $student['category'] ?></td>
                    <!-- <td><?php echo $student['class'] ?></td>!-->
                    <td><?php echo $student['dob'] ?></td>
                   <!-- <td><?php echo $student['join_date'] ?></td> !-->
                    <td><input type="checkbox" <?php if ($student['status']==1) { echo "checked"; } ?> name="status"></td>
                    <td>
                    	<a href="#" data-html="true" data-trigger="hover click" data-content='




<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div>
            <div class="card user-card">
                <div class="card-header">
                    <h5>Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img class="img-radius" alt="Avatar 5" src="<?php echo base_url().'uploads/student_registration/'.$student['file'] ?>">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10"><?php echo $student['name'] ?> <?php echo $student['prenom'] ?></h6>
                    <p class="text-muted">Active | <?php echo $student['sexe'] ?> | Born 23.05.1992</p>
                    <hr>
                    <p class="text-muted m-t-15">Activity Level: 87%</p>
                    <ul class="list-unstyled activity-leval">
                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="bg-c-blue counter-block m-t-10 p-20">
                        <div class="row">
                            <div class="col-4">
                                <i class="fa fa-comment"></i>
                                <p>1256</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-user"></i>
                                <p>8562</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-suitcase"></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr>
                    <div class="row justify-content-center user-social-link">
                        <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 







                    	' data-placement="left" class="btn btn-info" data-toggle="popover"><i class="fas fa-pen-square fa-lg"></i></a>
                       <a href="<?php echo base_url().'student/edit_student/'.$student['id'] ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Modifier"><i class="fas fa-pen-square fa-lg"></i></a>
                       <a href="<?php echo base_url().'student/delete_student/'.$student['id'] ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" onclick="deleteStud()" title="Supprimer"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                   </td>
               </tr>
               <?php $i++; } ?>
           </tbody>
           <tfoot>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Statu</th>
                
                <th>Nom</th>
                <th>Statu</th>
                <th>Action</th>
                <th>Nom</th>
                <th>Statu</th>
                <th>Status</th>
            </tr>
        </tfoot>
    </table>
</div>


