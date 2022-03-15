<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChainController extends Controller
{
    //
    public function addBlock() {

        $Blockchain = new \flavienbwk\BlockchainPHP\Blockchain();
        $block = $Blockchain->addBlock("blockchain.dat", "What you want to put in the blockchain");

        dd($block);
    }
}
