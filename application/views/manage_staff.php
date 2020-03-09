 <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Employés <span class="badge badge-info" style="margin-left: 5px">(1)</span>
                                    <div class="page-title-subheading">
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button onclick="window.location.href='javascript:';" data-toggle="modal" data-target=".modalestaff" class="mb-2 mr-2 btn-icon btn btn-primary btn-lg"><i class="pe-7s-plus btn-icon-wrapper"> </i>Ajouter Employé </button>
                            </div>    </div>
                    </div>
<div class="main-card mb-3 card">
   <button data-type="success" id="hamza" class="btn-show-swal" style="display: none;">Success</button>
                        <div class="card-body">

                           


                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Code Employé</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>E-Mail</th>
                                    <th>N°Telephone</th>
                                    <th>Fonctionnalité</th>
                                    <th>Expérience</th>
                                    <th>Date de Naissance</th>
                                    <th>Date d'embauche</th>
                                    <th>Salaire</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    
                                 <?php 
                                 $i=1;
                                 foreach ($staff as $s1) {
                                      ?>
                                  <tr>
                                      <td><?php echo $i; ?></td>
                                      <td><?php echo $s1['lname']; ?></td>
                                      <td><?php echo $s1['fname']; ?></td>
                                      <td><?php echo $s1['email']; ?></td>
                                      <td><?php echo $s1['mobile']; ?></td>
                                      <td><?php echo $s1['fonc']; ?></td>
                                      <td><?php echo $s1['exp']; ?></td>
                                      <td><?php echo $s1['dob']; ?></td>
                                      <td><?php echo $s1['jdate']; ?></td>
                                      <td><?php echo $s1['sal']; ?></td>
                                      <td><input type="checkbox" name="status ">Active</td>
                                      <td>
                                        <a href="<?php echo base_url().'staff/edit_staff/'.$s1['id'] ?>" class="btn btn-info" data-toggle="tooltip" data-placement="bottom" title="Modifier"><i class="fas fa-pen-square fa-lg"></i></a>
                                        <a href="<?php echo base_url().'staff/delete_staff/'.$s1['id'] ?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" onclick="deleteStud()" title="Supprimer"><i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
                                    </td>
                                  </tr>


                               <?php
                                $i++;
                                } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Statu</th>
                                    <th>Action</th>
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


