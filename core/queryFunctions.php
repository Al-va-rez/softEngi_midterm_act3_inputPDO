<!-- Functions for interacting with the database -->
<?php require_once 'dbConfig.php';

    // INSERT A RECORD
    function addEngineer($pdo, $first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num) {
        $sql = "INSERT INTO software_engineers (first_Name, last_Name, degree, college, residence, prev_exp, contact_Num) VALUES (?,?,?,?,?,?,?)";

        $query = $pdo->prepare($sql);

        $executeQuery = $query->execute([$first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num]);

        if ($executeQuery) {
            return true;	
        }
    }


    // GET ALL RECORDS
    function fetch_All_Engineers($pdo) {
        $sql = "SELECT * FROM software_engineers";

        $query = $pdo->prepare($sql);
        $executeQuery = $query->execute();

        if ($executeQuery) {
            return $query->fetchAll();
        }
    }


    // GET SPECIFIC RECORD
    function getEngineer($pdo, $applicant_id) {
        $sql = "SELECT * FROM software_engineers WHERE applicant_id = ?";
        
        $query = $pdo->prepare($sql);

        if ($query->execute([$applicant_id])) {
            return $query->fetch();
        }
    }

    
    // UPDATE A RECORD
    function update_Record($pdo, $applicant_id, $first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num) {

        $sql = "UPDATE software_engineers 
                    SET first_Name = ?, 
                        last_Name = ?, 
                        degree = ?, 
                        college = ?, 
                        residence = ?, 
                        prev_exp = ?, 
                        contact_Num = ? 
                WHERE applicant_id = ?";

        $query = $pdo->prepare($sql);
        
        $executeQuery = $query->execute([$first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num, $applicant_id]);

        if ($executeQuery) {
            return true;
        }
    }


    // DELETE A RECORD
    function remove_Engineer($pdo, $applicant_id) {
        $sql = "DELETE FROM software_engineers WHERE applicant_id = ?";
        
        $query = $pdo->prepare($sql);
        $executeQuery = $query->execute([$applicant_id]);

        if ($executeQuery) {
            return true;
        }
    }

?>