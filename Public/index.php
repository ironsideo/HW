<<?php
/**
 * Created by PhpStorm.
 * User: ironside
 * Date: 3/9/19
 * Time: 7:46 PM
 */


// main::start("DataFile.csv");
main::start("Sampledata.csv");

class main  {

    static public function start($filename)
    {
        $records = csv::getRecords($filename);
        //  print_r($records);
    }
}

class csv
{
    static public function getRecords($filename)
    {
        if($file = fopen( $filename, "r" ))
        {
            $record = fgetcsv( $file );			// Headers
            $data = Array( $record );			// Put on the table
            while (!feof( $file )) {
                $record = fgetcsv( $file );
                array_push( $data, $record );
            }
            fclose( $file );
            //return $data;
            print_r($data);
        } else print_r("filenofound");
    }
}

