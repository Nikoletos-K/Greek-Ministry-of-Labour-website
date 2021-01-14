<?php
  session_start();
  include '../db_connection.php';
  $errors = array(); 

    
  if($_POST['rowid']) {
    
    $afm = $_POST['rowid'];
    // echo $_POST['rowid'];
    
    $_SESSION['user'] = $_POST['rowid'];

    $query_1 = "SELECT * FROM genericuser WHERE afm='$afm' ";
    $user_q = mysqli_query($conn, $query_1);
    $user = mysqli_fetch_assoc($user_q);
    $_SESSION['fetched_user']['data'] = $user;

    $query_2 = "SELECT * FROM employee WHERE afm='$afm' ";
    $user_q = mysqli_query($conn, $query_2);
    $user_benefits = mysqli_fetch_assoc($user_q);

    $anastoli_id = $user_benefits['anastoli_id'];
    if($anastoli_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$anastoli_id' ";
        $result = mysqli_query($conn, $query);
        $anastoli = mysqli_fetch_assoc($result);
        if($anastoli){
            $_SESSION['fetched_user']['anastoli'] = $anastoli;
        }else{
            $_SESSION['fetched_user']['anastoli'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['anastoli'] = NULL;
    }

    $thlergasia_id = $user_benefits['thlergasia_id'];
    if($thlergasia_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$thlergasia_id' ";
        $result = mysqli_query($conn, $query);
        $thlergasia = mysqli_fetch_assoc($result);
        if($thlergasia){
            $_SESSION['fetched_user']['thlergasia'] = $thlergasia;
        }else{
            $_SESSION['fetched_user']['thlergasia'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['thlergasia'] = NULL;
    }
    

    $adeia_id = $user_benefits['adeia_id'];
    if($adeia_id){
        $query = "SELECT * FROM employee_action WHERE action_id='$adeia_id' ";
        $result = mysqli_query($conn, $query);
        $adeia = mysqli_fetch_assoc($result);
        if($adeia){
            $_SESSION['fetched_user']['adeia'] = $adeia;
        }else{
            $_SESSION['fetched_user']['adeia'] = NULL;
        }   
    }else{
        $_SESSION['fetched_user']['adeia'] = NULL;
    }

    $_SESSION['fetched_user']['as_array'] = array();
    $_SESSION['fetched_user']['as_array']['adeia'] = $_SESSION['fetched_user']['adeia'];
    $_SESSION['fetched_user']['as_array']['thlergasia'] = $_SESSION['fetched_user']['thlergasia'];
    $_SESSION['fetched_user']['as_array']['anastoli'] = $_SESSION['fetched_user']['anastoli'];
    print_r($_SESSION['fetched_user']['as_array']['anastoli']);
    echo "END";

    echo '<div class="contact modal-body">					
        <div class="row  justify-content-center">
            <div class="col">
                <div style="font-size:16px;" class="form-group">
                    <label style="font-weight:bold;" class="col-sm-2 control-label">Ονομα</label>
                    <div class="col-sm-8">';
                        echo $_SESSION['fetched_user']['data']["firstname"];
                   echo' </div>
                </div>
                <div style="font-size:16px;" class="form-group">
                    <label style="font-weight:bold;" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">';
                        echo $_SESSION['fetched_user']['data']["email"];
                    echo'</div>
                </div>
            
            </div>
            <div class="col">
                <div style="font-size:16px;" class="form-group">
                    <label style="font-weight:bold;" class="col-sm-2 control-label">Επίθετο</label>
                    <div class="col-sm-8">';
                        echo $_SESSION['fetched_user']['data']["lastname"];
                    echo'</div>
                </div>
                <div style="font-size:16px;" class="form-group">
                    <label style="font-weight:bold;" class="col-sm-2 control-label">Τηλέφωνο</label>
                    <div class="col-sm-8">';
                        echo $_SESSION['fetched_user']['data']["phone"];
                    echo'</div>
                </div>
            
                
            </div>
            <div class="col">
                <div style="font-size:16px;" class="form-group">
                    <label style="font-weight:bold;" class="col-sm-2 control-label">ΑΦΜ</label>
                    <div class="col-sm-10">';
                        echo $_SESSION['fetched_user']['data']["afm"];
                    echo '</div>
                </div>
                
            </div>
        </div>	
        <br><br><hr>
        <div class="table-responsive">
            <div class="table-wrapper">
                                                                                
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Κατάσταση εργαζομένου</h2>
                        </div>
                    </div>
                </div>
                
                <table id="table" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th > Άρση </th>
                            <th class="w-25"> Δήλωση </th>
                            <th class="w-25">Κατάσταση</th>
                            <th class="w-25">Από</th>
                            <th class="w-25">Εώς</th>
                        </tr>
                    </thead> 
                    <tbody>';
                            $array = $_SESSION['fetched_user']['as_array'];

                            foreach($array as $key => $value){

                                if($key === 'anastoli')   {
                                    $newtype = 'Αναστολή σύμβασης εργασίας';
                                } elseif ($key === 'adeia') {
                                    $newtype = 'Άδεια ειδικού σκοπού';
                                } else {
                                    $newtype = 'Τηλεργασία';
                                } 
                                if(!$value){
                                    $disabled = ' disabled ';
                                    $date1 = ' - ';
                                    $date2 = ' - ';
                                    $status = 'ΑΝΕΝΕΡΓΗ';

                                } else {
                                    $disabled = ' ';
                                    $date1 = $value['starting_date'];
                                    $date2 =  $value['end_date'];
                                    $status = 'ΕΝΕΡΓΗ';
                                    
                                }
                                echo "<tr>";
                                echo "<td>
                                    <span class='custom-checkbox'>
                                        <input id='checkbox2' " .$disabled. " type='checkbox' name='checkBoxes2[]'  value='" . $key . "'>
                                        <label for='checkbox2'></label>
                                    </span>
                                    </td>";
                                echo "<td>" . $newtype .  "</td>";
                                echo "<td>" . $status . "</td>";
                                echo "<td>" . $date1 . "</td>";
                                echo "<td>" . $date2 . "</td>";
                                echo '</tr>';
                            }
                        echo'
                    </tbody> 
                </table>
            </div>
        </div>
        <div class="mb-3">
            <div class="loading">Φόρτωση</div>
            <div class="error-message text-center"></div>
            <div class="sent-message">Οι άρσεις έγιναν με επιτυχία</div>
            <div class="reload"></div>
        </div>
        <div class="text-center">
            <button value="submit" name="submit" type="submit">Άρση επιλεγμένων δηλώσεων</button>
            
        </div>
    </div>';
  }

?>