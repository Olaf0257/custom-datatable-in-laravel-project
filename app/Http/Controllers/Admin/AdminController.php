<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Event;
use Auth;

class AdminController extends Controller
{
    //

    /**
     * Display a listing of the resource
     * 
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $tblTitle = "República Dominicana"; //title at the top of the table
        $tblAlert = "Guardando cambios…";   //alert in thead.
        $btnState = "active";               //state of "Aprobar forecast" button
        $options = array("República Dominicana", "11111111", "2222222", "3333333333", "qqq"); //values of select element at the top of the table
        return view('admin.index')->with(array('tblTitle'=>$tblTitle, 'tblAlert' => $tblAlert, 'options' => $options, 'btnState' => $btnState));
    } 
    public function getData()
    {
        $data = array(
            "data" => array(
                array(
                    "PRODUCT" => "BACTICEL (160mg/800mg) COMP. RECUBIERTOS/12",
                    "SEP" => array(
                        "SEP" => "23",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "23",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "23",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "23",
                    "DEC" => "23",
                    "ENE" => "23",
                    "FEB" => "23",
                    "MAR" => "23"
                ),
                array(
                    "PRODUCT" => "BACTICEL (8mg/40mg/ml) SUSP. 120 ML",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "BAGOHEPAT COMP./20",
                    "SEP" => array(
                        "SEP" => "54",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "54",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "54",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "54",
                    "DEC" => "54",
                    "ENE" => "54",
                    "FEB" => "54",
                    "MAR" => "54"
                ),
                array(
                    "PRODUCT" => "BAGOTIROX (100 mcg) COMP./50",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "BAGOTIROX (150 mcg) COMP./50",
                    "SEP" => array(
                        "SEP" => "12",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "12",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "12",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "12",
                    "DEC" => "12",
                    "ENE" => "12",
                    "FEB" => "12",
                    "MAR" => "12"
                ),
                array(
                    "PRODUCT" => "BAGOTIROX (50 mcg) COMP./50",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "BAGOVIT A CLASSIC CREMA/100 G",
                    "SEP" => array(
                        "SEP" => "5",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "5",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "5",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "5",
                    "DEC" => "5",
                    "ENE" => "5",
                    "FEB" => "5",
                    "MAR" => "5"
                ),
                array(
                    "PRODUCT" => "DIOXAFLEX (1.16 g/100 g) GEL TUBO/50 g",
                    "SEP" => array(
                        "SEP" => "4",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "4",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "4",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "4",
                    "DEC" => "4",
                    "ENE" => "4",
                    "FEB" => "4",
                    "MAR" => "4"
                ),
                array(
                    "PRODUCT" => "DIOXAFLEX (25 mg/5 ml) SUSP. 90 ML",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "35",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "35",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "35",
                    "DEC" => "35",
                    "ENE" => "35",
                    "FEB" => "35",
                    "MAR" => "35"
                ),
                array(
                    "PRODUCT" => "DIOXAFLEX (50 mg) COMP. RECUBIERTOS/100",
                    "SEP" => array(
                        "SEP" => "355",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "355",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "355",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "355",
                    "DEC" => "355",
                    "ENE" => "355",
                    "FEB" => "355",
                    "MAR" => "355"
                ),
                array(
                    "PRODUCT" => "iopiop",
                    "SEP" => array(
                        "SEP" => "23",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "23",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "23",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "23",
                    "DEC" => "23",
                    "ENE" => "23",
                    "FEB" => "23",
                    "MAR" => "23"
                ),
                array(
                    "PRODUCT" => "jkljkhjklhj",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "jhuiobnm",
                    "SEP" => array(
                        "SEP" => "54",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "54",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "54",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "54",
                    "DEC" => "54",
                    "ENE" => "54",
                    "FEB" => "54",
                    "MAR" => "54"
                ),
                array(
                    "PRODUCT" => "gjfgj",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "tyuy",
                    "SEP" => array(
                        "SEP" => "12",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "12",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "12",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "12",
                    "DEC" => "12",
                    "ENE" => "12",
                    "FEB" => "12",
                    "MAR" => "12"
                ),
                array(
                    "PRODUCT" => "fjhfgjfg",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "vgsd",
                    "SEP" => array(
                        "SEP" => "5",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "5",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "5",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "5",
                    "DEC" => "5",
                    "ENE" => "5",
                    "FEB" => "5",
                    "MAR" => "5"
                ),
                array(
                    "PRODUCT" => "eeeee",
                    "SEP" => array(
                        "SEP" => "4",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "4",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "4",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "4",
                    "DEC" => "4",
                    "ENE" => "4",
                    "FEB" => "4",
                    "MAR" => "4"
                ),
                array(
                    "PRODUCT" => "fffff",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "35",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "35",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "35",
                    "DEC" => "35",
                    "ENE" => "35",
                    "FEB" => "35",
                    "MAR" => "35"
                ),
                array(
                    "PRODUCT" => "ggggg",
                    "SEP" => array(
                        "SEP" => "355",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "355",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "355",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "355",
                    "DEC" => "355",
                    "ENE" => "355",
                    "FEB" => "355",
                    "MAR" => "355"
                ),
                array(
                    "PRODUCT" => "ertertewrtwert",
                    "SEP" => array(
                        "SEP" => "23",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "23",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "23",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "23",
                    "DEC" => "23",
                    "ENE" => "23",
                    "FEB" => "23",
                    "MAR" => "23"
                ),
                array(
                    "PRODUCT" => "odfgcvb",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "reytry",
                    "SEP" => array(
                        "SEP" => "54",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "54",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "54",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "54",
                    "DEC" => "54",
                    "ENE" => "54",
                    "FEB" => "54",
                    "MAR" => "54"
                ),
                array(
                    "PRODUCT" => "iopyuirtu",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "dmghhdfg",
                    "SEP" => array(
                        "SEP" => "12",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "12",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "12",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "12",
                    "DEC" => "12",
                    "ENE" => "12",
                    "FEB" => "12",
                    "MAR" => "12"
                ),
                array(
                    "PRODUCT" => "qweqweqwr",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "34",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "34",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "34",
                    "DEC" => "34",
                    "ENE" => "34",
                    "FEB" => "34",
                    "MAR" => "34"
                ),
                array(
                    "PRODUCT" => "ouip",
                    "SEP" => array(
                        "SEP" => "5",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "5",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "5",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "5",
                    "DEC" => "5",
                    "ENE" => "5",
                    "FEB" => "5",
                    "MAR" => "5"
                ),
                array(
                    "PRODUCT" => "dtgfhj",
                    "SEP" => array(
                        "SEP" => "4",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "4",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "4",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "4",
                    "DEC" => "4",
                    "ENE" => "4",
                    "FEB" => "4",
                    "MAR" => "4"
                ),
                array(
                    "PRODUCT" => "qqqhjweqwe",
                    "SEP" => array(
                        "SEP" => "34",
                        "color" => "#22B573"
                    ),
                    "OCT" => array(
                        "OCT" => "35",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "35",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "35",
                    "DEC" => "35",
                    "ENE" => "35",
                    "FEB" => "35",
                    "MAR" => "35"
                ),
                array(
                    "PRODUCT" => "udfgsdfg",
                    "SEP" => array(
                        "SEP" => "355",
                        "color" => "#EF2660"
                    ),
                    "OCT" => array(
                        "OCT" => "355",
                        "color" => "#EF2660"
                    ),
                    "NOV" => array(
                        "NOV" => "355",
                        "color" => "#22B573"
                    ),
                    "AVERAGE" => "355",
                    "DEC" => "355",
                    "ENE" => "355",
                    "FEB" => "355",
                    "MAR" => "355"
                ),
            )
        );
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
    }
    public function updateData()
    {
        $user = Auth::user();
        $tblAlert2 = "Ultima modificación por " .$user->name. " ayer a la(s) " . $_POST['time'];
        echo $tblAlert2;
    }
}
