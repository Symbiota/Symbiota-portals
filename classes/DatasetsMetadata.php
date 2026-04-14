<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> origin

  include_once($SERVER_ROOT.'/classes/Manager.php');

 /**
 * Controler class for /neon/classes/DatasetsMetadata.php
<<<<<<< HEAD
 * 
 */

 class DatasetsMetadata extends Manager {
   
=======
 *
 */

 class DatasetsMetadata extends Manager {

>>>>>>> origin
  public function __construct() {
    parent::__construct(null,'readonly');
    $this->verboseMode = 2;
    set_time_limit(2000);
  }

  public function __destruct() {
    parent::__destruct();
  }

  // Main functions

  // Gets NEON Domains
  public function getNeonDomains(){
    $dataArr = array();

<<<<<<< HEAD
    $sql = 'SELECT d.name AS domainnumber, s.domainname, d.datasetid FROM omoccurdatasets AS d JOIN neon_field_sites AS s ON d.name = s.domainnumber GROUP BY domainnumber ORDER BY domainnumber;';
=======
    $sql = 'SELECT IFNULL(d.name, d.datasetName) AS domainnumber, s.domainname, d.datasetid FROM omoccurdatasets AS d JOIN neon_field_sites AS s ON d.name = s.domainnumber GROUP BY domainnumber ORDER BY domainnumber;';
>>>>>>> origin

    $result = $this->conn->query($sql);

    while ($row = $result->fetch_assoc()){
      $dataArr[] = $row;
    }
<<<<<<< HEAD
    $result->free(); 
=======
    $result->free();
>>>>>>> origin
    return $dataArr;
  }

  // Gets NEON Sites filtered by Domain
  public function getNeonSitesByDom($domainnumber){
    $dataArr = array();

    $sql = 'SELECT siteid, sitename, domainnumber, datasetid FROM omoccurdatasets AS d JOIN neon_field_sites AS s ON d.name = s.siteid WHERE domainnumber = "'.$domainnumber.'" ORDER BY siteid;';

    $result = $this->conn->query($sql);

    while ($row = $result->fetch_assoc()){
      $dataArr[] = $row;
    }
    $result->free();
    return $dataArr;
  }
};

;?>