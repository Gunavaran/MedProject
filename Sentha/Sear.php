
<div class="tab-content">
    <div class="tab-pane active" id="home">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table m-0 table-colored table-primary table-hover">
                                <?php
                                    include 'Connect.php';

                                        $query_hospitals = "select DISTINCT location, date from hospital NATURAL  JOIN patient_history WHERE hospital.name=patient_history.hospital AND diagnosis='dengue'";
                                        $query_hospital_run = mysqli_query($link, $query_hospitals);

                                        while ($query_hospital_row = mysqli_fetch_assoc($query_hospital_run)) {
                                            $address = $query_hospital_row['location'];
                                            $date = $query_hospital_row['date'];


                                            ?>


                                            <?php
                                            echo "There is a Dengue victim was identified in $address on $date. Therefore chance of spreading dengue is increased. People are requested to be aware of Dengue";

                                    }
                                ?>




                            </table>

                        </div>




