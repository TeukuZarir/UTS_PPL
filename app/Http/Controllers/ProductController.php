<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $product = Product::all();
        $data = array(
            'pageTitle' => 'Data Product',
            'title' => 'Data Product',
        );
        return view('page.data.product', $data, [
            'product' => $product
        ]);
    }

    function form()
    {
        $data = array(
            'pageTitle' => 'Form Data Product',
            'title' => 'Form Data Product',
        );
        return view('page.data.form.form-product', $data);
    }

    function buat(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        if ($product) {
            return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
        }
        return redirect()->back()->with('error', 'Data gagal ditambahkan.');
    }

    public function edit($product)
    {
        $product = product::find($product);

        if ($product) {
            $data = [
                'title' => 'Edit Data Product',
                'pageTitle' => 'Edit Data Product',
                'product' => $product
            ];
            return view('page.data.edit.edit-product', $data);
        }

        return redirect()->route('edit-product')->with('error', 'Data tidak ditemukan...');
    }

    public function update(Request $request, $product)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = product::find($product);

        if ($product) {
            $product->update($validated);
            return redirect()->route('product')->with('success', 'Data berhasil diperbarui!');
        }

        return redirect()->route('product')->with('error', 'Data tidak ditemukan!');
    }

    function destroy($product)
    {
        $product = product::find($product);
        if ($product) {

            $product->delete();
            return redirect('/data/product')->with('success', 'Data berhasil dihapus...');
        }
        return redirect('/data/product')->with('error', 'Data tidak ditemukan...');
    }
}
