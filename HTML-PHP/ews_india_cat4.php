<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category 4 - EWS for India</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../CSS/navbar.css">
  <link rel="stylesheet" href="../CSS/india_rt.css">
  
</head>
<body>
  <?php include 'image_holder.php'; ?>
  <?php include 'navbar.html'; ?>
  <div class="container">
   <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 mx-auto text-center jumbotron bg-info text-white">
          <h2>Category 4: Stable</h2>
          <p>
            <!-- description of category -->
          </p>
          <!-- Add your charts or data visualization here -->
        </div>
      </div>
    </div>
    

    <!-- Image holders -->
    <div class="row">
        <?php
        // Generate image holders
        $cat1 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36);

        for ($i = 0; $i < count($cat1); $i++) {
            // Check if it's the first image holder of the row
            if (($cat1[$i] - 1) % 2 == 0) {
                echo '</div><div class="row">'; // Close the previous row and start a new one
            }
            echo '<div class="col-md-6">';
            generateImageHolder("ews","$cat1[$i]-state_lamda_t_plots.png", "$cat1[$i]-state_lamda_t_plots.html","state_lamda_t.R", 1,[14],450,550);
            echo '</div>';
        }
        ?>
    </div>
  </div>
  <?php include 'footer.html'; ?>
  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
