<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class InvoiceController extends Controller
{

    function invoice(Request $request, $invoiceId, $fileType = "pdf") {
        // request fetcher methods
        // request()->validate([
        //     'download' => 'required_without:email',
        //     'email' => 'required_without:download',
        //     'print' => 'required_with:download'
        // ]);
        var_dump($request->all());
        if ($request->has('download')) {
            $fileType = $request->input('download');
            $printType = $request->input('print');
            if ($printType) {
                return response("Downloading {$fileType} an invoice with ID: $invoiceId and print type: $printType", 200);
            }
            return response("Downloading {$fileType} an invoice with ID: $invoiceId", 200);
        }

        if ($request->has('email')) {
            $email = $request->input('email');
            return response("Emailing an invoice with ID: $invoiceId to $email", 200);
        }
        

        return response("Downloading an invoice with ID: $invoiceId", 200);
    }
    function requestExample(Request $request) {
        $greetings = $request->input('greetings', 'Hello, World!');
        // var_dump($greetings);
        return response("Greetings: $greetings", 200);
    }
}
