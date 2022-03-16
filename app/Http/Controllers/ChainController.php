<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChainController extends Controller
{
    public function addBlock(Request $request) {

        $Blockchain = new \flavienbwk\BlockchainPHP\Blockchain();
        $block = $Blockchain->addBlock("blockchain.dat", $request->content);

        if($block->hasError()) {
            return $block->getMessage();
        }

        $hash = $block->getHash();

        dump($hash);
        dd($block);
    }

    public function showAllBlocks() {

        $Blockchain = new \flavienbwk\BlockchainPHP\Blockchain();
        $all = $Blockchain->getBlockchain("blockchain.dat");

        $all = json_decode($all, true);
        dump($all);
    }
}
