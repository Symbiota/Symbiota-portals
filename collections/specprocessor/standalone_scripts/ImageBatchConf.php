<?php 
//Variables needing security

//Server root is generally needed since scripts may be run from outside of folder (including crontab runs)
//This is the path base folder of portal (e.g. trunk)
$serverRoot = '';

//Base folder containing herbarium folder ; read access needed
$sourcePathBase = '/mnt/storage.idigbio.org_home/idigstorage';
//Folder where images are to be placed; write access needed
$targetPathBase = '/mnt/storage.idigbio.org_home/idigbio-storage.acis.ufl.edu';

//Url base needed to build image URL that will be saved in DB
//Only needed if scripts are run on an exteral server
$imgUrlBase = 'http://storage.idigbio.org/';

//Title (e.g. CNALH) and Path to where log files will be placed
$logTitle = 'seinet';
$logProcessorPath = $sourcePathBase.'/logs';
//0 = silent, 1 = html, 2 = log file
$logMode = 2;

//If record matching PK is not found, should a new blank record be created?
$createNewRec = true;

//Weather to copyover images with matching names (includes path) or rename new image and keep both
$imgExists = 2;

$webPixWidth = 1400;
$tnPixWidth = 200;
$lgPixWidth = 4000;
$webFileSizeLimit = 300000;
$lgFileSizeLimit = 5000000;

//Whether to use ImageMagick for creating thumbnails and web images. ImageMagick must be installed on server.
// 0 = use GD library (default), 1 = use ImageMagick
$useImageMagickBatch = 0;

//Value between 0 and 100
$jpgQuality = 85;

$webImg = 1;			// 1 = evaluate source and import, 2 = import source and use as is, 3 = map to source  
$tnImg = 1;				// 1 = create from source, 2 = import source, 3 = map to source, 0 = exclude 
$lgImg = 1;				// 1 = import source, 2 = map to source, 3 = import large version (_lg.jpg), 4 = map large version (_lg.jpg), 0 = exclude

$keepOrig = 0;

//0 = write image metadata to file; 
//1 = write metadata to a Symbiota database (connection variables must be set)
$dbMetadata = 1;

/**
 * Array of parameters for collections to process.
 * collid => array( 
 *     'pmterm' => '/A(\d{8})\D+/', 		// regular expression to match collectionCode and catalogNumber in filename, first backreference is used as the catalogNumber. 
 *     'prpatt' => '/^/',           		// optional regular expression for match on catalogNumber to be replaced with prrepl. 
 *     'prrepl' => 'barcode-',       		// optional replacement to apply for prpatt matches on catalogNumber.
 *     										// given above description, 'A01234567.jpg' will yield catalogNumber = 'barcode-01234567'
 *     'sourcePathFrag' => 'asu/lichens/'	// optional path fragment appended to $sourcePathBase that is specific to particular collection. Not typcially needed.  
 * )
 * 
 */

$collArr = array(
	103 => array('sourcePathFrag' => 'mna/seinet/', 'pmterm' => '/^([B]{1}\d+)\D*/', 'prpatt' => '/^B{1}/', 'prrepl' => 'B.'),
	467 => array('sourcePathFrag' => 'kcsp/seinet/', 'pmterm' => '/^(P\d+\.JPG)$/')
);
?>
