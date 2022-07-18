<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class ProductComponent extends Component
{   
    use WithPagination;

    public $view = 'create';
    public $product_id, $name, $description, $quantity, $price;
   


    public function render()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('livewire.product-component', compact('products'));  
    }
    public function destroy($id){

        Product::destroy($id);

    }
    public function save(){
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        Product::create([
            'name'        => $this->name,
            'description' => $this->description,
            'quantity'    => $this->quantity,
            'price'       => $this->price
        ]);
        $this->reset();
    }
}
