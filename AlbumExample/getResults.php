<?php
require_once("../login.php");

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// Output "no suggestion" if no hint was found or output correct values 
// echo $hint === "" ? "no suggestion" : $hint;

					//$q = "central";
					$sql = "SELECT * FROM index2 WHERE keyword LIKE '".$q."%'";
					$result = $conn->query( $sql );

					if ( $result->num_rows > 0 ) {
						// output data of each row
						while ( $row = $result->fetch_assoc() ) {


							echo '<div class="col-md-4">
              <div class="card mb-4 shadow-sm">
<div class="card-body">
              <img class="card-text" src="../pictures/' . $row[ source ] . '" alt="none" style="width: 100%; height: 100%">
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group text-center">
					<button class="btn btn-default">
     					<img src="../heart.svg" width="40" class="center-block" alt="none"/></button>
                    </div>
                    <small id="location" class="text-muted">' . $row[ keyword ] . '</small>
                  </div>
                </div>
              </div>
            </div>';
						}
					} else {
						echo "0 results";
					}
					$conn->close();
					?>