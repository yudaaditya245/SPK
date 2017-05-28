<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HidupController extends Controller
{
    public function index()
    {
        return view('hidup');
    }


    public function diagnosa($id)
    {
        switch ($id) {
            case 1:
                $data = array(
                  'id' => 1,
                  'ask' => 'Apakah Ponsel Anda menampilkan boot animation?',
                  'ya' => url('diaghidup/2'),
                  'tidak' => url('diagmati/2')
                );
              break;

            case 2:
                $data = array(
                  'id' => 2,
                  'ask' => 'Apakah Ponsel Anda stuck di boot animation?',
                  'ya' => url('solhidup/softbrick'),
                  'tidak' => url('diaghidup/3')
                );
              break;

            case 3:
                $data = array(
                  'id' => 3,
                  'ask' => 'Apakah Ponsel Anda dapat masuk ke menu utama?',
                  'ya' => url('solhidup/ok'),
                  'tidak' => url('diaghidup/4')
                );
              break;

            case 4:
                $data = array(
                  'id' => 4,
                  'ask' => 'Apakah Ponsel Anda blank hitam setelah boot animation?',
                  'ya' => url('solhidup/app'),
                  'tidak' => url('diaghidup/2')
                );
              break;

          default:
                $data = array(
                  'id' => 1,
                  'ask' => 'Apakah Ponsel Anda menampilkan boot animation?',
                  'ya' => url('diagmati/2'),
                  'tidak' => url('diagmati/2')
                );
            break;
        }

        return view('diagnosa', ['data' => $data]);
    }

    public function solhidup($solusi)
    {
        switch ($solusi) {
          case 'softbrick':
                $data = array(
                  'masalah' => 'Ponsel Anda mengalami SoftBrick',
                  'solusi' => 'Anda dapat melakukan wipe data & cache dengan menggunakan CWM. Jika masalah tetap, lakukan flashing dengan cara masing masing ponsel'
                );
            break;

          case 'app':
                $data = array(
                  'masalah' => 'Kemungkinan Aplikasi di dalam Ponsel Anda mengalami terlambat loading, atau gagal update',
                  'solusi' => 'Anda dapat melakukan wipe cache pada CWM'
                );
            break;

          case 'ok':
                $data = array(
                  'masalah' => 'Ponsel Anda masih bekerja dengan normal',
                  'solusi' => '-'
                );
            break;

          default:
            # code...
            break;
        }

        return view('solusi', ['data' => $data]);
    }
}
