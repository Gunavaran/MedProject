<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="input-group m-t-10">
            <form action="search.php" method="post" name="fixedform">
                <input type="text" name="Find">
                <input type="submit" value="Search">
            </form>

            <?php
            include 'connect.php';

            if (isset($_POST['Find'])) {
                $find = $_POST['Find'];
                //$query_hospitals = "SELECT name, location, facility, cost, customer_service FROM (hospital NATURAL JOIN hospital_rating) where address like %$find% order by facility";
                $query_hospitals = "select * from hospital where location= '$find'";
                $query_hospital_run = mysqli_query($link, $query_hospitals);
                while ($query_hospital_row = mysqli_fetch_assoc($query_hospital_run)) {
                    $name = $query_hospital_row['name'];
                    echo $name;
                }

            }
            ?>




        </div>


        <div class="m-t-30 text-center">
            <h4>Search Results For "</h4>
        </div>
    </div>
</div>
