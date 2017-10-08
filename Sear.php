<form action="Sear.php" method="post" name="fixedform">
    <input type="text" name="Find">
    <input type="submit" value="Search">
</form>
<div class="tab-content">
    <div class="tab-pane active" id="home">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table m-0 table-colored table-primary table-hover">
                                <thead>

                                <tr>
                                    <th>Hospital</th>
                                    <th>Address</th>
                                    <th>Contact No</th>
                                    <th>Facility Rating</th>
                                    <th>Expense Rating</th>
                                    <th>Customer Service rating</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <?php
                                    include 'connect.php';

                                    if (isset($_POST['Find'])) {
                                        $find = $_POST['Find'];
                                        //$query_cost="SELECT a_cost FROM (SELECT AVG(cost) AS a_cost FROM hospital_rating GROUP BY hospital_ID)";
                                        //$query_facility="SELECT a_facility FROM (SELECT AVG(facility) AS a_facility FROM hospital_rating GROUP BY hospital_ID)";
                                        //$query_custom="SELECT a_custom FROM (SELECT AVG(customer_service) AS a_custom FROM hospital_rating GROUP BY hospital_ID)";
                                        $query_hospitals = "select (name,location,hospital_ID,contact,AVG(cost) ,AVG(facility),AVG(customer_service)) from (hospital NATURAL JOIN hospital_rating) GROUP BY (hospital_ID) where (hospital.hospital_ID=hospital_rating.hospital_ID) AND location LIKE '%$find%' ORDER BY facility DESC ";
                                        $query_hospital_run = mysqli_query($link, $query_hospitals);

                                        while ($query_hospital_row = mysqli_fetch_assoc($query_hospital_run)) {
                                            $name = $query_hospital_row['name'];
                                            $address = $query_hospital_row['location'];
                                           // $id = $query_hospital_row['hospital_ID'];
                                            $contact_no = $query_hospital_row['contact'];
                                            $facility = $query_hospital_row['facility'];
                                            $cost = $query_hospital_row['cost'];
                                            $customer_service = $query_hospital_row['customer_service'];


                                            ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $name; ?></td>
                                                <td><?php echo $address; ?></td>
                                                <td><?php echo $contact_no; ?></td>
                                                <td><?php echo $facility; ?></td>
                                                <td><?php echo $cost; ?></td>
                                                <td><?php echo $customer_service; ?></td>

                                            </tr>
                                            </tbody>
                                            <?php
                                        }
                                    }
                                ?>




                            </table>

                        </div>




