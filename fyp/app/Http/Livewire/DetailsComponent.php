<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Sale;
use App\Models\OrderItem;
use App\Models\Order;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\Component;
use Cart;
class DetailsComponent extends Component
{
    
        public $slug;   
        public $qty;
        public $category_id;
        public $scategories;
    
        public function mount($slug)
        {
            $this->slug = $slug; 
            $this-> qty=1; 
                         
        }
        public function increaseQuantity()
        {    
            $this->qty++;
            return $this->redirect('details'); 
        }

        public function decreseQuantity()    
        {            
            if($this->qty > 1)
            {
                $this->qty--;
                return $this->redirect('details'); 
            }
        }
        
        public function render()
        {
            $product = Product::where('slug',$this->slug)->first();
            $related_products = Product::where('category_id',$product->category_id)->inRandomOrder()->limit(5)->get();
            $popular_products = Product::inRandomOrder()->limit(4)->get();
            $sale = Sale::find(1);
            return view('livewire.details-component',['product'=>$product,'related_products'=>$related_products,'popular_products'=>$popular_products,'sale'=>$sale,])->layout('layouts.project');
            
        }
        public function store($product_id,$product_name,$product_price)
        {
            Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
            session()->flash('success_message','Item added in Cart');
            return redirect()->route('product.cart');
        }
    }