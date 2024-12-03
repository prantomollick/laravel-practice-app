<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function download() {
        return response("Downloading a file", 200);
    }

    // function downloadInvoice(Request $request, $invoiceId) {
    //     return response("Downloading an invoice with ID: $invoiceId", 200);
    // }

    // function downloadInvoiceWithType(Request $request, $invoiceId, $fileType = 'pdf') {
    //     return response("Downloading {$fileType} an invoice with ID: $invoiceId", 200);
    // }

    function downloadInvoice(Request $request,$invoiceId, $fileType = 'pdf', ...$params) {
        var_dump($params);
        return response("Downloading {$fileType} an invoice with ID: $invoiceId", 200);
    }


    function error() {
        // return abort(404, "No Invoice Id Provided");
        return response("Error: No invoice ID provided", 404);
    }
}
