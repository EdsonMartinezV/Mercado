<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Object_ as TypesObject_;
use PhpParser\Node\Expr\Cast\Object_;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{
    function showProduct() {
        $product = new Integer(1);
        if ($product->isConsigned) {
            return view('product', compact('product'));
        }else{
            return view('unconsignedProduct');
        }
    }

    function showProductKardex($productId) {
        $product = '';
        return view('productKardex', compact('product'));
    }

    function showUnconsignedProducts(){
        return view('showUnconsignedProducts');
    }

    function consignProduct($productId){
        return view('consignProduct', compact('productId'));
    }

    function acceptProduct(Request $request, $product){
        $acceptedProduct = $product;
        $changesToProduct = $request->all();
        $acceptedProduct->manage = $changesToProduct['manage'];
        $acceptedProduct->consignReason = $changesToProduct['consignReason'];
        $acceptedProduct->isAccepted = true;
        return redirect('/manager/unconsigned-products');
    }

    function showConsignedProducts(){
        return view('showConsignedProducts');
    }

    function unconsignProduct($product){
        $product->isConsigned = false;
    }
}
