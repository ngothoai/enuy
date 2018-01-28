<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\category_product;
use File;
// use App\Cart;
use DB,Cart;
class ProductController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('index', ['products' => $products]);
    }
     public function getSignIn(){
        return view('user.signin');
    }
     public function postSignIn(Request $request){
        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|min:3'
            ],
            [
                'email.required' => 'Bạn chưa nhập đúng email',
                'password.required' => 'Bạn chưa nhập password',
                'password.min' => 'Password không được nhỏ hơn 3 ký tự',
            ]
            );
        if(Auth::attempt(['email' => $request->email,'password'=> $request->password])){
            return redirect()->route('allproduct');
        }else{
            return redirect()->back();
        }
    }
    public function getProfile(){
        return view('user.profile');
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
    // public function getAddtocart(Request $req, $id) {
    //     $product = Product::find($id);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     $cart->add($product,$product->id);
    //     $req->session()->put('cart',$cart);
    //     dd($cart);
    //     return redirect()->route('allproduct');
    // }
    // public function getCart(){
    //     if(!Session::has('cart')){
    //         return view('shop.shopping-cart');
    //     }
    //     $oldCart = Session::get('cart');
    //     $cart = new Cart($oldCart);
    //     return view('shop.shopping-cart', ['products' => $cart->items,'totalPrice' => $cart->totalPrice]);
    // }
    // public function getOder(Request $request){
    //     $request->session()->forget('cart');
    //     return redirect()->Route('allproduct');
    // }

    // public function getUpdateQty(Request $require){
    //     // Session::forget('cart' . $require->id_up);
    //     // $product_rm = Session::forget('cart', $require->id_up)->first();
    //     // $product_rm->destroy($require->id_up);
    // // return redirect()->back();

    //      $product = Product::find($require->id_up);
    //     $oldCart = Session::has('cart') ? Session::get('cart') : null;
    //     $cart = new Cart($oldCart);
    //     Session::forget('cart' . $require->id_up);
    //     $cart->addupdate($product,$product->id, $require->qty_up);
    //     $require->session()->put('cart',$cart);
    //     return view('shop.shopping-cart', ['products' => $cart->items,'totalPrice' => $cart->totalPriceUpdate]);
    // }
    public function getAddtocart($id) {
        $product_buy = DB::table('products')->where('id',$id)->first();
        Cart::add(array('id' => $id,'name' => $product_buy->title,'price' => $product_buy->price, 'qty' => 1, 'options' => array('img' => $product_buy->imgProduct)));
        $content = Cart::content();
        return redirect()->route('update.cart');
    }
    public function getGiohang(){
         $content = Cart::content();
         $total = Cart::subtotal(0,'.','');
        return view('shop.shopping-cart',compact('content','total'));
    }
    public function getCapnhat(Request $request){
        if($request->ajax()){
                $id = $request->id;
                $qty = $request->qty;
                Cart::update($id,$qty);
                return "oke";
            }
    }
    public function getXoasanpham($id){
        Cart::remove($id);
        return redirect()->route('update.cart');
    }
    
    //Chi tiet san pham
    public function getDetailproduct($nameProduct, $id){
        $product_detail = Product::find($id);
        return view('shop.detail-product',compact('product_detail'));
    }
    //Them danh muc san pham
    public function getCategoryProduct(){
        $all_cat = category_product::all();
        return view('admin.product.list-category', compact('all_cat'));
    }
    public function postCategoryProduct(Request $req){
        $danhmuc = new category_product;
        $this->validate($req,
           [
                'name_category' => 'required|unique:category_product,name|min:6|max:30',
            ],
            [
                'name_category.required' =>'Bạn phải nhập mục',
                'name_category.min' =>'Danh mục từ 6 ký tự trở lên',
                'name_category.max' =>'Danh mục không được quá 30 ký tự',
                'name_category.unique' =>'Danh mục đã tồn tại',
                
            ]);
          
        $danhmuc->name = $req->name_category;
         // $danhmuc->slug = str_slug($req->danhmuc, '-');
        $danhmuc->parent_id = $req->id_category;
        $danhmuc->save();
        
        return redirect()->route('post-category-product')->with('thongbao','Thêm danh mục thành công');
    }
    public function getEditCatproduct($id){
        $show_cat = category_product::find($id);
        $danhmuc =  category_product::all();
        return view('admin.product.editcat', compact(['show_cat','danhmuc']));
    }
    public function postEditCatproduct(Request $req, $id){
        $edit_product = category_product::find($id);
         $this->validate($req,
           [
                'name_category' => 'required|unique:category_product,name|min:6|max:30',
            ],
            [
                'name_category.required' =>'Bạn phải nhập mục',
                'name_category.min' =>'Danh mục từ 6 ký tự trở lên',
                'name_category.max' =>'Danh mục không được quá 30 ký tự',
                'name_category.unique' =>'Danh mục đã tồn tại',
                
            ]);
        $edit_product->name = $req->name_category;
         // $danhmuc->slug = str_slug($req->danhmuc, '-');
        $edit_product->parent_id = $req->id_category;
        $edit_product->save();
        return redirect()->route('get-edit-cat-product',['id' => $edit_product->id])->with('thongbao','Sửa danh mục thành công');
    }
    public function getDeleteCatproduct($id){
        $cat = category_product::find($id);
        $cat->delete();
        return redirect()->route('get-category-product')->with('thongbao','Xóa thành công');
    }
    //add san pham
    public function getAddproduct(){
        $danhmuc =  category_product::all();
        return view('admin.product.add-product',compact('danhmuc'));
    }
    public function postAddproduct(Request $req){
        $this->validate($req,
        [
            'name_product' => 'required|min:6|max:50',
            'description_long' => 'required',
            'description_short' => 'required|max:100',
            'price_regular' => 'required',
            'img_product' => 'required|mimes:jpeg,png,jpg,gif|max:4000',
        ],
        [
            'name_product.required' =>'Bạn phải nhập tên sản phẩm',
            'name_product.min' =>'Tên sản phẩm ít nhất 6 ký tự',
            'name_product.max' =>'Tên sản phẩm không nên nhập quá 50 ký tự',
            'description_long.required' =>'Bạn phải nhập mô tả sản phẩm',
            'description_short.required' =>'Bạn phải nhập mô tả ngắn sản phẩm',
            'description_short.max' =>'Bạn không được nhập quá 100 ký tự',
            'img_product.mimes' =>'Bạn phải nhập ảnh đúng định dạng jpeg,png,gif,jpg',
            'img_product.max' =>'Bạn nhập ảnh không được quá 4MB',
        ]);
        $new_product = new Product;
        $new_product->title = $req->name_product;
        $new_product->description = $req->description_long;
        $new_product->des_short = $req->description_short;
        $new_product->idcat = $req->id_category;
        $new_product->price = $req->price_regular;
        if($req->hasFile('img_product')){
            $file = $req->file('img_product');
            $name = $file->getClientOriginalName();
            $tenHinh = time().'_'.str_random(4)."_".$name;
            while(file_exists("uploads/posts/".$tenHinh)){
                $tenHinh = str_random(4)."_".$name;
            }
            $file->move("uploads/posts",$tenHinh);
            $new_product->imgProduct = $tenHinh;
        }
        $new_product->save();
        return redirect()->route('add-product')->with('thongbao','Thêm thành công');
    }

    public function getListProduct(){
        $allproduct =  Product::all();
        return view('admin.product.list-product',compact('allproduct'));
    }
    public function getEditProduct($id){
        $product_edit= Product::find($id);
        $danhmuc =  category_product::all();
        return view('admin.product.edit-product', compact(['product_edit','danhmuc']));
    }
    public function postEditProduct(Request $req, $id){
        $this->validate($req,
        [
            'name_product' => 'required|min:6|max:50',
            'description_long' => 'required',
            'price_regular' => 'required',
            'img_product' => 'mimes:jpeg,png,jpg,gif|max:3000',
        ],
        [
            'name_product.required' =>'Bạn phải nhập tên sản phẩm',
            'name_product.min' =>'Tên sản phẩm ít nhất 6 ký tự',
            'name_product.max' =>'Tên sản phẩm không nên nhập quá 50 ký tự',
            'description_long.required' =>'Bạn phải nhập mô tả sản phẩm',
            'img_product.mimes' =>'Bạn phải nhập ảnh đúng định dạng jpeg,png,gif,jpg',
            'img_product.max' =>'Bạn nhập ảnh không được quá 4MB',
        ]);
        $edit_product = Product::find($id);
        $edit_product->title = $req->name_product;
        $edit_product->description = $req->description_long;
        $edit_product->des_short = $req->description_short;
        $edit_product->idcat = $req->id_category;
        $edit_product->price = $req->price_regular;
        if($req->hasFile('img_product')){
            $file = $req->file('img_product');
            $name = $file->getClientOriginalName();
            $tenHinh = time().'_'.str_random(4)."_".$name;
            while(file_exists("uploads/posts/".$tenHinh)){
                $tenHinh = str_random(4)."_".$name;
            }
            $file->move("uploads/posts",$tenHinh);
            $edit_product->imgProduct = $tenHinh;
        } else {
            $edit_product->imgProduct = $edit_product->imgProduct;
        }
        $edit_product->save();
        return redirect()->route('get-edit-product',['id' => $edit_product->id])->with('thongbao','Sửa thành công');
    }

     public function getDeleteProduct($id){
        $cat = Product::find($id);
        File::delete('uploads/posts/' . $cat->imgProduct);
        $cat->delete();
        // Cart::remove($id);
        return redirect()->route('list-product')->with('thongbao','Xóa thành công');
    }
}

