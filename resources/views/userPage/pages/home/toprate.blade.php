 @if (!empty($productRate))
     @foreach ($productRate as $item)
         <li class="col-6 col-md-4 col-xl product-item">
             <div class="product-item__outer h-100 w-100">
                 <div class="product-item__inner px-xl-4 p-3">
                     <div class="product-item__body pb-xl-2">
                         {{-- {{dd($item->productType->category->id_category)}} --}}
                         <div class="mb-2"><a
                                 href="{{ route('categories.show', ['category' => $item->productType->category->id_category]) }}"
                                 class="font-size-12 text-gray-5">Category :
                                 {{ $item->productType->category->name }} - <b>Brand : {{ $item->productType->category->brand->name ?? "" }}</b></a></div>
                         <h5 class="mb-1 product-item__title"><a
                                 href="{{ route('categories.show', ['category' => $item->productType->category->id_category]) }}"
                                 class="text-blue font-weight-bold">{{ $item->productType->name }}</b> -
                                 <b style="color: {{ $colors[(int) $item->warehouse->color]['color'] ?? 'gray' }}"
                                     class="mx-1">
                                     {{ $colors[(int) $item->warehouse->color]['name'] ?? '' }}
                                 </b> -
                                 <b class="mx-1">
                                     {{ $memory[(int) $item->warehouse->memory]['text'] ?? '' }}
                                 </b>
                             </a></h5>
                         <div class="mb-2">
                             <a href="{{ route('products.show', ['product' => $item->products->id_product ?? 0]) }}"
                                 class="d-block text-center"><img class="img-fluid" src="../{{ $item->thumbnail }}"
                                     alt="Image Description"></a>
                         </div>
                         <div class="flex-center-between mb-1">
                             @if ($item->discount > 0)
                                 <div class="prodcut-price d-flex align-items-center position-relative">
                                     <ins
                                         class="font-size-20 text-red text-decoration-none"><b>${{ number_format($item->price - $item->price * ($item->discount / 100)) }}</b></ins>
                                     <del
                                         class="font-size-12 tex-gray-6 position-absolute bottom-100">${{ number_format($item->price) }}</del>
                                 </div>
                             @else
                                 <div class="prodcut-price">
                                     <div class="text-gray-100"><b>${{ number_format($item->price) }}</b></div>
                                 </div>
                             @endif
                             @if ($item->active_quantity !== null && ($item->active_quantity- $item->quantity_sell) > 0 && $item->active_quantity != $item->quantity_sell)
                                 <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none"
                                     type="hidden" value="1" name="quantity" id="quantity">
                                 <div class="d-none d-xl-block prodcut-add-cart">
                                     <a onclick="addCart({{ $item->id_product }})" href="javascript:"
                                         class="btn-add-cart btn-primary transition-3d-hover"><i
                                             class="ec ec-add-to-cart"></i>
                                     </a>
                                 </div>
                             @else
                                 <a href="{{ route('index.contact') }}"
                                     class="btn-add-cart btn-danger transition-3d-hover">
                                     <i class="fas fa-phone"></i></a>
                             @endif
                         </div>
                     </div>
                 </div>
         </li>
     @endforeach
 @endif
