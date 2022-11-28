<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function controller()
    {
        // separate the controller's capitalized filename into an array
        $controller = explode('\\', get_class($this));
        $controller = end($controller);
        $controller = str_replace('Controller', '', $controller);
        return $controller = strtolower($controller);
    }

    public function index()
    {
        $controller = $this->controller();
        return view("$controller.$controller", [
            'controller' => $controller,
        ]);
    }

    public function proses(Request $request)
    {
        $nama = $request->nama;
        $tinggi = $request->tinggi;
        $berat = $request->berat;

        // tinggi diubah ke bilangan desimal
        $tinggi = $tinggi / 100;
        $kuadrat = $tinggi * $tinggi;
        $bmi = $berat / $kuadrat;

        if ($bmi < 19) {
            $status = "Kurus";
        } elseif ($bmi >= 19 && $bmi <= 24.9) {
            $status = "Ideal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $status = "Gemuk";
        } else {
            $status = "Obesitas";
        }

        //redirec to / with sending data
        return redirect('/')->with([
            'nama' => $nama,
            'status' => $status
        ]);
    }
}
